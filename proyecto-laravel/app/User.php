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
        'role', 'name', 'surname', 'nick', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     //Relacion de muchos a uno

     public function user() {
        return $this->belongsTo('App\User','user_id');
    }

    //Relacion de muchos a uno

    public function images() {
        return $this->hasMany('App\Image');
    }

}
