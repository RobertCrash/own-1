<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\Company;
use App\Models\UsersFootprint as UserFootprint;
class SimpleLoginEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $user_id;
    private $password;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user_id , $password)
    {
        $this->user_id = $user_id;
        $this->password = $password;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

            
            $user = User::where('id', $this->user_id)->first();
           
            $company = Company::all();
            $mbox = @imap_open("{".$user->provider_imap_srv.":".$user->provider_imap_port."/imap/ssl}",  $user->email, $this->password );
         

            if($mbox == false){
            return ['status' => 400 , 'message' => imap_last_error(),'data' => 0];
            }
            if(isset($company[0])){
             for($i=0;$i<count($company);$i++){
              $query = sprintf('BODY "%s"', $company[$i]->name);
           

              $check_data  = imap_search( $mbox,$query , SE_UID);

             

              if($check_data != false){
                $data = UserFootprint::where('user_id' , $this->user_id)->where('company_id' ,$company[$i]->id )->first();
                if(!isset($data->id)){
                 $add_data = new UserFootprint();
                 $add_data->user_id = $this->user_id;
                 $add_data->company_id = $company[$i]->id;
                 $add_data->is_active = 1;
                 $add_data->save();

                }
              }
             }
            }
            
          }

}
