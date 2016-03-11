<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
protected $fillable = array('title','img','desc' );
protected $table = 'news';

}
