<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
protected $fillable = array('name','email','phone','msg');
 protected $table = 'contacts';
 public $timestamps = false;
}
