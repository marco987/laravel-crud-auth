<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
  protected $fillable = [
    'name',
    'race',
    'cat_rfid'
  ];
}
