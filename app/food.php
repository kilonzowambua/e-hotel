<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    protected $table = 'food';
    protected $fillable = [
        'foodname', 'image','ingredients','price','type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '',
    ];

}
