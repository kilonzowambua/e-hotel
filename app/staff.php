<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


use Illuminate\Foundation\Auth\User as Authenticatable;

class staff extends Authenticatable
{
    

    protected $table = 'staff';
    protected $guard = 'staff';
    protected $fillable = [
        'staffname', 'email','workshift', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
