<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'client';
    protected $fillable = [
        'clientname', 'email','nationalid','county', 'password',
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
