<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = [
    	'name', 'slug', 'body', 'file','start', 'end'
    ];
}
