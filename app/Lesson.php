<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
    	'type_id','day', 'time'
    ];

    public function type()
    {
    	return $this->belongsTo(Type::class);
    }

}
