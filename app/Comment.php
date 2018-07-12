<?php

namespace App;


class Comment extends Model
{
    public function post()
    {
    	return $this->belongsTo(Post::class);
    }

    public function addComment($body)
    {
    	Comment::create([

    		'body' => $body,

    		'post_id' => $this->id


    	]);
    }
}
