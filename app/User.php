<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id','photo_id', 'is_active','phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public  function role(){
        return $this->belongsTo('App\Role');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public  function photo(){
        return $this->belongsTo('App\Photo');
    }

/*    public function isAdmin(){

        if($this->role->name == "Administrator" && $this->is_active == 1){

            return true;

        }else{

            return false;
        }

    }*/

    public function posts(){

        return $this->hasMany('App\Post');

    }

    public  function isAdmin(){

        if($this->role->name == 'Administrateur'){

            return true;

        }
            return false;
    }
}
