<?php

namespace App\Jobs;

use App\Models\Company;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use App\Models\UsersFootprint;


use Config;
//use Google\Apiclient\Google as Google;

class SimpleFetchEmailsJobGoogle implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $user_id;
    //protected $user_id;

    /**
     * Create a new job instance.
     *
     * @return void
     */
     public function __construct(int $user_id)
     {
         $this->user_id = $user_id;
         //$this->user = $user;
     }

    /**
     * Execute the job.
     *
     * @return void
     */

    public function handle(){
      $client = new \Google_Client();
      $config = Config::get('services.google');
      $client->setClientId($config['client_id']);
      $client->setClientSecret($config['client_secret']);
      $client->setRedirectUri($config['redirect']);
      $client->addScope($config['scopes']);

      $client->setAccessType('offline');
      $client->setPrompt('select_account consent');
      $client->setIncludeGrantedScopes(true);
      $user = User::where('id' , $this->user_id)->first();
      $token = [
        'access_token' => $user->provider_token,
        'refresh_token' => $user->provider_token_refresh,
        'expires_in' => $user->provider_token_expires
      ];
      $client->setAccessToken(json_encode($token));
      // If there is no previous token or it's expired.
      if ($client->isAccessTokenExpired()) {
        $apiURL = 'https://accounts.google.com/o/oauth2/token';
        $postInput = [
           'client_id' => $config['client_id'],
           'client_secret'  => $config['client_secret'],
           'refresh_token'  => $user->provider_token_refresh,
           'grant_type'  => 'refresh_token'
        ];
        $headers = [];
        $response = Http::withHeaders($headers)->post($apiURL, $postInput);
        $response->status();
        $data = json_decode($response->getBody(), true);
        User::where("id", $this->user_id)->update(["provider_token" => $data['access_token']]);
        $accessToken = $data;
      }else{
        $accessToken = $token;
      }
      if(isset($accessToken['access_token'])){
        $Company = Company::get();
        if(isset($Company[0])){
          for($i=0;$i<count($Company);$i++){
            $response = Http::withHeaders([
              'Content-Type' => 'application/json',
              'Authorization' => 'Bearer '.$accessToken['access_token']
            ])->get(env('GOOGLE_MAIL_BOX_URL')."?q=".$Company[$i]->name."");
            $data = json_decode($response->getBody(), true);
    
            if(isset($data['messages'][0])){
              $footprint =  UsersFootprint::where(['user_id' => $this->user_id , 'company_id' => $Company[$i]->id ])->first();
              if(!isset($footprint->id)){
                $add_footprint = new UsersFootprint();
                $add_footprint->user_id = $this->user_id;
                $add_footprint->company_id = $Company[$i]->id;
                $add_footprint->is_active = 1;
                $add_footprint->save();
              }
            }
          }
        }
      }
    }
    
}