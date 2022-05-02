<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        //'name' => Str::random(10),
        'name' => 'test0',
        //'email' => Str::random(10).'@gmail.com',
        'email' => 'test0@gmail.com',
        'password' => Hash::make('password'),

        'provider' => 'pop3_imap',

        'email_verified_at' => now(),
        'email_inbox_verified_at' => now(),
      ]);
      User::create([
        //'name' => Str::random(10),
        'name' => 'test1',
        //'email' => Str::random(10).'@gmail.com',
        'email' => 'test1@gmail.com',
        'password' => Hash::make('password'),

        'provider' => 'pop3_imap',
        
        'provider_imap_srv'  => 'imap.web.de',
        'provider_imap_port' => '993',
        'provider_imap_ssl'  => 'ssl',
        'provider_smtp_srv'  => 'smtp.web.de',
        'provider_smtp_port' => '587',
        'provider_smtp_ssl'  => 'tls',

        'email_verified_at' => now(),
      ]);
    }
}
