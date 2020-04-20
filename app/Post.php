<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//table name
protected $table='posts';
//priamry key
public $primrykey='id';
//timesstamps
public $timestamp=true;
public function user()
{
    return $this->belongsTo('App\User');
}
}
