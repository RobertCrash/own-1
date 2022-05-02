<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompaniesDataType extends Model
{
    //use HasFactory;

    //restricts columns from modifying
    protected $guarded = [];

    public function company()
    {
      return $this->belongsTo('App\Models\Company', 'company_id');
    }

}
