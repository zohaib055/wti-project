<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plots extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'plot', 
        'size', 
        'number',
        'reg',
        'address',
        'contact_no',
        'remarks',
        'status',
        'dues',
        'names',
        'block',
    ];


}
