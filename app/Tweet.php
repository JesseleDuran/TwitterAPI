<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
  protected $table = "tweets";

  protected $fillable = [
    'tweet',
    'image',
    'rt',
    'fav',
    'id_user'
  ];

  //Un tweet le pertenece a un usuario
  public function user()
  {
      return $this->belongsTo('App/User', 'id', 'id_user');
  }

}
