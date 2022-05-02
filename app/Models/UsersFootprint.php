<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Traits\Filterable;

class UsersFootprint extends Model
{
    //use HasFactory;
    use Filterable;

    //restricts columns from modifying
    protected $guarded = [];

    // returns the instance of the user
    public function user()
    {
      return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function company()
    {
      return $this->belongsTo('App\Models\Company', 'company_id');
    }
}
