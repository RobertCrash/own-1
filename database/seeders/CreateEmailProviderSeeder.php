<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\EmailProvider;

//use Illuminate\Support\Str;

class CreateEmailProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      EmailProvider::create([
        'name' => 'Google / Gmail',
        'server_imap' => 'imap.gmail.com',
        'server_imap_port' => '993',
        'server_imap_ssl' => 'ssl',
        'server_smtp' => 'smtp.gmail.com',
        'server_smtp_port' => '587',
        'server_smtp_ssl' => 'tls',

        'is_active' => 1,
      ]);

      EmailProvider::create([
        'name' => 'Web.de',
        'server_imap' => 'imap.web.de',
        'server_imap_port' => '993',
        'server_imap_ssl' => 'ssl',
        'server_smtp' => 'smtp.web.de',
        'server_smtp_port' => '587',
        'server_smtp_ssl' => 'tls',

        'is_active' => 1,
      ]);

      EmailProvider::create([
        'name' => 'GMX',
        'server_imap' => 'imap.gmx.net',
        'server_imap_port' => '993',
        'server_imap_ssl' => 'ssl',
        'server_smtp' => 'mail.gmx.net',
        'server_smtp_port' => '587',
        'server_smtp_ssl' => 'tls',

        'is_active' => 1,
      ]);


    }
}
