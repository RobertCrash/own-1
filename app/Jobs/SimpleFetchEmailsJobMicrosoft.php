<?php

namespace App\Jobs;

use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\UsersFootprint as UserFootprint;
use App\Models\User;
use App\Models\Company;
use Microsoft\Graph\Graph;

class SimpleFetchEmailsJobMicrosoft implements ShouldQueue{

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $user_id;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user_id)
    {
       $this->user_id = $user_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(){

      $user	= User::where(['id' => $this->user_id])->first();

      $provider = new \Stevenmaguire\OAuth2\Client\Provider\Microsoft([
        'clientId'                  => env('MICROSOFT_CLIENT_ID'),
        'clientSecret'              => env('MICROSOFT_CLIENT_SECRET'),
        'redirectUri'               => env('MICROSOFT_REDIRECT_URL'),
        'scopes'                    => 'offline_access openid profile user.read Mail.Read',
        'urlAuthorize'              => 'https://login.microsoftonline.com/common/oauth2/v2.0/authorize',
        'urlAccessToken'            => 'https://login.microsoftonline.com/common/oauth2/v2.0/token',
      ]);


      $token = [
        'access_token'  => $user->provider_token,
        'refresh_token' => $user->provider_token_refresh,
        'expires_in'    => $user->provider_token_expires
      ];

      $accessToken = new \League\OAuth2\Client\Token\AccessToken($token);
      if ($accessToken->hasExpired()) {
        if ($accessToken->getRefreshToken()) {
            $accessToken = $provider->getAccessToken('refresh_token', [
                'refresh_token' => $accessToken->getRefreshToken()
            ]);
        }
      }
      try {
        $accessToken = $provider->getAccessToken('refresh_token', [
            'refresh_token' => $accessToken->getRefreshToken()
        ]);
      } catch (Exception $e) {

        exit($e->getMessage());
      }


      $graph = new Graph();
      $graph->setAccessToken($accessToken->getToken());

      try {
        $msuser = $graph->createRequest('GET', '/me')
          ->setReturnType(\Microsoft\Graph\Model\User::class)
          ->execute();
      } catch (Exception $e) {
      }

      try {
        $Company = Company::get();

        if(isset($Company[0])){
        for($i=0;$i < count($Company);$i++){
        $messages = $graph->createRequest('GET', "/me/messages?search=".$Company[$i]->name."")
        ->execute();


        if($messages != false){
           $footprint =  UserFootprint::where(['user_id' => $this->user_id , 'company_id' => $Company[$i]->id])->first();

        if(!isset($footprint->id)){

           $userfootprint = new UserFootprint();
           $userfootprint->user_id = $this->user_id;
           $userfootprint->company_id = $Company[$i]->id;
           $userfootprint->is_active = 1;
           $userfootprint->save();
        }
    }

        }
     }
      } catch (\Microsoft\Graph\Exception\GraphException $e) {
      }


      echo date('h:i:s') . " SimpleFetchEmailsJobMicrosoft -  Jod finished " . $this->job->uuid() . "\n";
    }


}
