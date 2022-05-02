<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\EmailProvider;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'terms' => ['accepted', 'required'],

            // no futher validation, add some (best cast: dynamic from db)
            'imap_provider_id' => ['required'],
        ])->validate();

        //$email_imap_provider = EmailImapProvider::where('id', $request->imap_provider_id)->get();
        //$email_imap_provider = EmailImapProvider::where('id', $request->imap_provider_id)->first();
        $email_imap_provider = EmailProvider::where('id', $input['imap_provider_id'])->first();

        // if ( isset( $email_imap_provider ) ) {
        //   echo $email_imap_provider;
        // }
        // if ( empty( $email_imap_provider ) ) {
        //   echo 'empty';
        // }

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),

            'provider' => 'pop3_imap',
            'provider_imap_srv' => $email_imap_provider->server_imap,
            'provider_imap_port' => $email_imap_provider->server_imap_port,
            'provider_imap_ssl' => $email_imap_provider->server_imap_ssl,
            'provider_smtp_srv' => $email_imap_provider->server_smtp,
            'provider_smtp_port' => $email_imap_provider->server_smtp_port,
            'provider_smtp_ssl' => $email_imap_provider->server_smtp_ssl,
        ]);
    }
}
