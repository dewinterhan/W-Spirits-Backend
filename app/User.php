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
        'name', 'email', 'password','role_id', 'is_active','is_user'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function isAdmin(){
        if($this->role->name == 'superadmin' && $this->is_active == 1){
            return true;
        }else{
            return false;
        }
    }

  /*  public function isUser(){
        if($this->role->name == 'user' && $this->is_user == 1){
            return true;
        }else{
            return false;
        }
    }*/

}
