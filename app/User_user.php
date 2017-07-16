<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_user extends Model
{
  protected $table = "user_user";

  protected $fillable = [
    'user_id',
    'seguir_id'
  ];

  public function seguidores()
  {
    return $this->belongsTo('App\User','user_id');
  }

  public function segguir_a()
  {
    return $this->belongsTo('App\User','seguir_id');
  }
}
