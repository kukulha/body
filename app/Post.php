<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use \Conner\Tagging\Taggable;

    protected $fillable = [
    	'user_id', 'category_id', 'name', 'slug', 'excerpt', 'body', 'file', 'featured'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    //Scope

    public function scopeBody($query, $body)
    {
        if($body)
            return $query->where('body', 'LIKE', "%$body%");
    }
}
