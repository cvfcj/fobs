<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class advertisements extends Model
{
  protected $fillable = ['enterprise','description','category','islands','uploadimage','uploadLogo','uploadvideo','username'];
}
