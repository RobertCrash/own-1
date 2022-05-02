<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\CompaniesDataType;

//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateCompaniesDataTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompaniesDataType::create([
          'type' => 'email_address',
          'name' => 'Email Address',
          'company_id' => 1,
        ]);
        CompaniesDataType::create([
            'type' => 'identity',
            'name' => 'Identity',
            'company_id' => 1,
        ]);
        CompaniesDataType::create([
            'type' => 'address',
            'name' => 'Address',
            'company_id' => 1,
        ]);
        CompaniesDataType::create([
            'type' => 'gender',
            'name' => 'Gender',
            'company_id' => 1,
        ]);
        CompaniesDataType::create([
            'type' => 'phone_number',
            'name' => 'Phone Number',
            'company_id' => 1,
        ]);
        CompaniesDataType::create([
            'type' => 'online_behavior',
            'name' => 'Online Behavior',
            'company_id' => 1,
        ]);
        CompaniesDataType::create([
            'type' => 'approximate_location',
            'name' => 'Approximate Location',
            'company_id' => 1,
        ]);

        CompaniesDataType::create([
            'type' => 'email_address',
            'name' => 'Email Address',
            'company_id' => 2,
          ]);
          CompaniesDataType::create([
              'type' => 'identity',
              'name' => 'Identity',
              'company_id' => 2,
          ]);
          CompaniesDataType::create([
              'type' => 'address',
              'name' => 'Address',
              'company_id' => 2,
          ]);
          CompaniesDataType::create([
              'type' => 'gender',
              'name' => 'Gender',
              'company_id' => 2,
          ]);
          CompaniesDataType::create([
              'type' => 'phone_number',
              'name' => 'Phone Number',
              'company_id' => 2,
          ]);
          CompaniesDataType::create([
              'type' => 'online_behavior',
              'name' => 'Online Behavior',
              'company_id' => 2,
          ]);
          CompaniesDataType::create([
              'type' => 'approximate_location',
              'name' => 'Approximate Location',
              'company_id' => 2,
          ]);

          CompaniesDataType::create([
            'type' => 'email_address',
            'name' => 'Email Address',
            'company_id' => 3,
          ]);
          CompaniesDataType::create([
              'type' => 'identity',
              'name' => 'Identity',
              'company_id' => 3,
          ]);
          CompaniesDataType::create([
              'type' => 'approximate_location',
              'name' => 'Approximate Location',
              'company_id' => 3,
          ]);

          CompaniesDataType::create([
            'type' => 'email_address',
            'name' => 'Email Address',
            'company_id' => 4,
          ]);
          CompaniesDataType::create([
              'type' => 'identity',
              'name' => 'Identity',
              'company_id' => 4,
          ]);
          CompaniesDataType::create([
              'type' => 'gender',
              'name' => 'Gender',
              'company_id' => 4,
          ]);
          CompaniesDataType::create([
              'type' => 'online_behavior',
              'name' => 'Online Behavior',
              'company_id' => 4,
          ]);
 
          CompaniesDataType::create([
            'type' => 'email_address',
            'name' => 'Email Address',
            'company_id' => 5,
          ]);
          CompaniesDataType::create([
              'type' => 'identity',
              'name' => 'Identity',
              'company_id' => 5,
          ]);

          CompaniesDataType::create([
            'type' => 'email_address',
            'name' => 'Email Address',
            'company_id' => 6,
          ]);
          CompaniesDataType::create([
              'type' => 'identity',
              'name' => 'Identity',
              'company_id' => 6,
          ]);

          CompaniesDataType::create([
            'type' => 'email_address',
            'name' => 'Email Address',
            'company_id' => 7,
          ]);
          CompaniesDataType::create([
              'type' => 'identity',
              'name' => 'Identity',
              'company_id' => 7,
          ]);

          CompaniesDataType::create([
            'type' => 'email_address',
            'name' => 'Email Address',
            'company_id' => 8,
          ]);
          CompaniesDataType::create([
              'type' => 'identity',
              'name' => 'Identity',
              'company_id' => 8,
          ]);

          CompaniesDataType::create([
            'type' => 'email_address',
            'name' => 'Email Address',
            'company_id' => 9,
          ]);
          CompaniesDataType::create([
              'type' => 'identity',
              'name' => 'Identity',
              'company_id' => 9,
          ]);

          CompaniesDataType::create([
            'type' => 'email_address',
            'name' => 'Email Address',
            'company_id' => 10,
          ]);
          CompaniesDataType::create([
              'type' => 'identity',
              'name' => 'Identity',
              'company_id' => 10,
          ]);
    }
}
