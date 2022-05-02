<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\UsersFootprint;

//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateUsersFootprintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      UsersFootprint::create([
        'user_id' => 1,
        'company_id' => 1,

        'is_wanted' => 1,

        'is_active' => 1,
      ]);
      UsersFootprint::create([
        'user_id' => 1,
        'company_id' => 2,

        'is_active' => 1,
      ]);
      UsersFootprint::create([
        'user_id' => 1,
        'company_id' => 3,

        'is_wanted' => 1,

        'is_active' => 1,
      ]);
      UsersFootprint::create([
        'user_id' => 1,
        'company_id' => 4,

        'is_wanted' => 1,

        'is_active' => 1,
      ]);
      UsersFootprint::create([
        'user_id' => 1,
        'company_id' => 5,

        'is_active' => 1,
      ]);
      UsersFootprint::create([
        'user_id' => 1,
        'company_id' => 6,

        'is_active' => 1,
      ]);
      UsersFootprint::create([
        'user_id' => 1,
        'company_id' => 7,

        'is_active' => 1,
      ]);
      UsersFootprint::create([
        'user_id' => 1,
        'company_id' => 8,

        'is_active' => 1,
      ]);

      UsersFootprint::create([
        'user_id' => 2,
        'company_id' => 1,

        'is_active' => 1,
      ]);
      UsersFootprint::create([
        'user_id' => 2,
        'company_id' => 2,

        'is_active' => 1,
      ]);
      UsersFootprint::create([
        'user_id' => 2,
        'company_id' => 3,

        'is_active' => 1,
      ]);
    }
}
