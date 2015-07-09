<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'title',
    	'sub_title',
    	'content',
        'user_id',
    	'is_feature',
    	'page_view',
    ];

    public function comments()
    {
    	return $this->hasMany('\App\Comment');
    }

    public function user()
    {
        return $this->belongsTo('\App\User');
    }
}
