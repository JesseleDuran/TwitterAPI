<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //un usuario tiene muchos seguidores
    public function seguidores()
    {
    	return $this->hasMany('App\User_user','seguidor_id');
  	}

    //Un usuario sigue a muchos seguidores
    public function sigue_a()
    {
      return $this->hasMany('App\User_user','seguido_id');
    }
}
