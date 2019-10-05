<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //protected $fillable = ['name']; //all fillable fields

    protected $guarded = []; //turns off mass assignment protection for this Model
}
