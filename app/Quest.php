<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
protected $fillable = array('id','user_id','game','pct','desc'  ,'imgur_url','game');
protected $table = 'quests';
public $timestamps = false;

}
