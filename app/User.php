<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;



class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

 /*  public function setPasswordAttribute($password){
     $this->attributes['password'] = \Hash::make($password);
   }
*/

    public function profile() //one user has only one profile
    {
       return $this->hasOne('App\Profile');
    }

   public function posts()
   {
     return $this->hasMany('App\Post');
   }
}
