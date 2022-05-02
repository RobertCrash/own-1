<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  //use HasFactory;

  //restricts columns from modifying
  protected $guarded = [];

  // returns ...
  // public function xxx()
  // {
  //   return $this->belongsTo('App\Xxx', 'xxx');
  // }

  public function data_types()
  {
       return $this->hasMany('App\Models\CompaniesDataType', 'company_id');
  }

}
