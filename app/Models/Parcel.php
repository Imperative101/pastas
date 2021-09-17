<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    use HasFactory;

    public function parcelPost()
    {
     return $this->hasMany('App\Models\post', 'post_id', 'id');
    }

}
