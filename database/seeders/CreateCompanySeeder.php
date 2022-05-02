<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Company;

//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Company::create([
              //'name' => Str::random(10),
              'name' => 'Amazon',
              'score_privacy' => 0.5,
              'score_security' => 0.66,

              'logo_path' => 'data.test.com/icons/microsoft.ico',

              'is_active' => 1,
      ]);
      Company::create([
              //'name' => Str::random(10),
              'name' => 'Google',
              'score_privacy' => 0.4,
              'score_security' => 0.75,

              'logo_path' => 'data.test.com/icons/microsoft.ico',

              'is_active' => 1,
      ]);
      Company::create([
              //'name' => Str::random(10),
              'name' => 'TikTok',
              'score_privacy' => 0.3,
              'score_security' => 0.5,

              'logo_path' => 'data.test.com/icons/microsoft.ico',

              'is_active' => 1,
      ]);
      Company::create([
              //'name' => Str::random(10),
              'name' => 'Facebook',
              'score_privacy' => 0.5,
              'score_security' => 0.5,

              'logo_path' => 'data.test.com/icons/microsoft.ico',

              'is_active' => 1,
      ]);
      Company::create([
              //'name' => Str::random(10),
              'name' => 'Twitter',
              'score_privacy' => 0.4,
              'score_security' => 0.5,

              'logo_path' => 'data.test.com/icons/microsoft.ico',

              'is_active' => 1,
      ]);
      Company::create([
              //'name' => Str::random(10),
              'name' => 'PayPal',
              'score_privacy' => 0.66,
              'score_security' => 0.8,

              'logo_path' => 'data.test.com/icons/microsoft.ico',

              'is_active' => 1,
      ]);
      Company::create([
              //'name' => Str::random(10),
              'name' => 'Microsoft',
              'score_privacy' => 0.5,
              'score_security' => 0.66,

              'logo_path' => 'data.test.com/icons/microsoft.ico',

              'is_active' => 1,
      ]);
      Company::create([
              //'name' => Str::random(10),
              'name' => 'Facebook',
              'score_privacy' => 0.4,
              'score_security' => 0.5,

              'logo_path' => 'data.test.com/icons/microsoft.ico',

              'is_active' => 1,
      ]);
      Company::create([
              //'name' => Str::random(10),
              'name' => 'LinkedIn',
              'score_privacy' => 0.5,
              'score_security' => 0.5,

              'logo_path' => 'data.test.com/icons/microsoft.ico',

              'is_active' => 1,
      ]);
      Company::create([
              //'name' => Str::random(10),
              'name' => 'Instagram',
              'score_privacy' => 0.4,
              'score_security' => 0.5,

              'logo_path' => 'data.test.com/icons/microsoft.ico',

              'is_active' => 1,
      ]);
    }
}