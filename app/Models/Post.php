<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function postParcel()
    {
     return $this->hasMany('App\Models\Parcel', 'parcel_id', 'id');
    }
 
}
