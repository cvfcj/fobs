<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registration extends Model
{
    protected $fillable = ['organization','username','password','phonenumber','country','activation'];
}