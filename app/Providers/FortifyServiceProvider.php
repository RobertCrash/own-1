<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Actions\Fortify\RedirectIfTwoFactorConfirmed;
use App\Actions\Fortify\DisableTwoFactorAuthentication as ReallyDisableTwoFactorAuthentication;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Actions\AttemptToAuthenticate;
use Laravel\Fortify\Actions\DisableTwoFactorAuthentication;
use Laravel\Fortify\Actions\EnsureLoginIsNotThrottled;
use Laravel\Fortify\Actions\PrepareAuthenticatedSession;
use Laravel\Fortify\Features;

use App\Models\EmailProvider;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::loginView(function(){
            return view('auth.login');
        });

        Fortify::registerView(function () {

          // dirty code
          $imap_providers = EmailProvider::pluck('name', 'id');
          //$selectedID = 2;

          //return view('auth.register', compact('id', 'imap_providers'));
          return view('auth.register', ['imap_providers' => $imap_providers]);

          //return view('auth.register');
            });

            Fortify::confirmPasswordView(function () {
                 return view('auth.password.confirm-password');
             });

             Fortify::twoFactorChallengeView(function () {
                     return view('auth.password.two-factor-challenge');
                 });

                 Fortify::requestPasswordResetLinkView(function () {
                         return view('auth.password.forgot-password');
                     });

                     Fortify::resetPasswordView(function ($request) {
        return view('auth.password.reset-password', ['request' => $request]);
    });

        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        Fortify::authenticateThrough(function(){
            return array_filter([
                config('fortify.limiters.login') ? null : EnsureLoginIsNotThrottled::class,
                Features::enabled(Features::twoFactorAuthentication()) ? RedirectIfTwoFactorConfirmed::class : null,
                AttemptToAuthenticate::class,
                PrepareAuthenticatedSession::class,
            ]);
        });

        // $this->app->bind(Laravel\Fortify\Actions\DisableTwoFactorAuthentication::class, function(){
        //     return new App\Actions\Fortify\DisableTwoFactorAuthentication($app);
        // });
        //$this->app->singleton(Laravel\Fortify\Actions\DisableTwoFactorAuthentication::class, App\Actions\Fortify\DisableTwoFactorAuthentication::class);
        $this->app->bind(DisableTwoFactorAuthentication::class, function(){
                    return new ReallyDisableTwoFactorAuthentication();
                });

        RateLimiter::for('login', function (Request $request) {
            $email = (string) $request->email;

            return Limit::perMinute(5)->by($email.$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
