<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /*Relationships*/
    public function likes()
    {
        return $this->hasMany(likes::class);
    }

    public function posts()
    {
        return $this->hasMany(Posts::class);
    }

    public function follows()
    {
        return $this->hasMany(Follows::class);
    }
}
