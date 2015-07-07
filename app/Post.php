<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'title',
    	'sub_title',
    	'content',
    	'is_feature',
    	'page_view',
    ];
}
