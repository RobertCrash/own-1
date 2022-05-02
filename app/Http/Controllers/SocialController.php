<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Jobs\SimpleFetchEmailsJobGoogle;
use App\Jobs\SimpleFetchEmailsJobMicrosoft;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use Validator;
use Socialite;

use Carbon\Carbon;

use Config;

use Exception;
//use Auth;

use Illuminate\Support\Facades\Log;

class SocialController extends Controller
{
    public function redirect($provider)
    {
        try{
      $config = Config::get('services.' . $provider);

    	return Socialite::driver($provider)->scopes($config['scopes'] ?? null)
        ->with(["access_type" => "offline", "prompt" => "consent"])
        ->redirect();
        }catch(Exception $e){
            return redirect('login');
        }
    }

    public function callback(Request $request, $provider)
    {
        try{
        $userSocial = Socialite::driver($provider)->stateless()->user();
        $user       = User::where(['email' => $userSocial->getEmail()])->first();
        $query = $request->query();

        if($user){
            $user->update([
              'provider'       => $provider,
              'provider_id'    => $userSocial->id,
              'provider_token' => $userSocial->token,
              'provider_token_refresh' => $userSocial->refreshToken,
              'provider_token_expires' => $userSocial->expiresIn,
              'provider_code' => $query['code']
            ]);

            Auth::login($user);

            
        }else{
            //$user = User::firstOrCreate([
            $user = User::create([
                'name'          => $userSocial->getName(),
                'email'         => $userSocial->getEmail(),
                'provider'       => $provider,
                'provider_id'    => $userSocial->id,
                'provider_token' => $userSocial->token,
                'provider_token_refresh' => $userSocial->refreshToken,
                'provider_token_expires' => $userSocial->expiresIn,
                'provider_code' => $query['code']
            ]);

            // $user->email_verified_at = date('Y-m-d H:i:s');
            $user->save();

            event(new Registered($user));

            Auth::login($user);

        }
        if($provider == 'google') {
          SimpleFetchEmailsJobGoogle::dispatch(Auth::user()->id)->delay(Carbon::now()->addSeconds(1));
        }
        if($provider == 'microsoft') {
          SimpleFetchEmailsJobMicrosoft::dispatch(Auth::user()->id)->delay(Carbon::now()->addSeconds(1));
        }
        if($provider == 'yahoo') {

        }

        return redirect('/dashboard');
        } catch(Exception $e){
            return redirect('login');
        }
        }

    // public function googleRedirect()
    // {
    //     return Socialite::driver('google')->redirect();
    // }
    //
    // public function loginWithGoogle()
    // {
    //     try {
    //
    //         $user = Socialite::driver('google')->user();
    //         $isUser = User::where('provider_id', $user->id)->first();
    //
    //         if($isUser){
    //             Auth::login($isUser);
    //             return redirect('/dashboard');
    //         }else{
    //             $createUser = User::create([
    //                 'name' => $user->name,
    //                 'email' => $user->email,
    //                 //'image'         => $user->getAvatar(),
    //                 'provider_id'   => $user->getId(),
    //                 'provider'      => 'google',
    //                 //'password' => encrypt('admin@123')
    //             ]);
    //
    //             Auth::login($createUser);
    //             return redirect('/dashboard');
    //         }
    //
    //     } catch (Exception $exception) {
    //         dd($exception->getMessage());
    //     }
    // }
}
