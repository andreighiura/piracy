<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
protected $fillable = array('id' ,'name' ,'email'  ,'lol_name'  ,'steam_name'     ,'battlenet_name','battlenet_pct',	'lol_pct' 	,'steam_pct'  ,'gen_pct', 'username', 'password'  );
 protected $table = 'users';
 public $timestamps = false;
}
