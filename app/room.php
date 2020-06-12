<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    
    protected $table = 'room';
    protected $fillable = [
        'roomtype','price','clientid','dateofrent','staffid',
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
