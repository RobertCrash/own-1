<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Fortify\TwoFactorAuthenticatable;

use Laravel\Fortify\Contracts\TwoFactorAuthenticationProvider;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'provider',
        'provider_id',
        'provider_token',
        'provider_token_refresh',
        'provider_token_expires',
        'provider_code',
        'provider_imap_srv',
        'provider_imap_port',
        'provider_imap_ssl',
        'provider_smtp_srv',
        'provider_smtp_port',
        'provider_smtp_ssl',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Model Functions
     *
     */
    public function confirmTwoFactorAuth($code) {
      $codeIsValid = app(TwoFactorAuthenticationProvider::class)
          ->verify(decrypt($this->two_factor_secret), $code);

      if ($codeIsValid) {
          $this->two_factor_confirmed = true;
          $this->save();

          return true;
      }

      return false;
    }

    // user has many footprints
     public function footprints()
     {
       return $this->hasMany('App\Models\UsersFootprint', 'user_id');
     }

     public function newsletters()
     {
       return $this->hasMany('App\Models\UsersNewsletter', 'user_id');
     }

}
