<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostCommentsController extends Controller
{
    public function store(Post $post)
    {
        //Comments folge 5
        //add a comment to the given post
        request()->validate([
            'body' => 'required'
        ]);


        $post->comments()->create([
            'user_id' => rand(1,12),
            'body' => request('body')

        ]);

        return back();
    }
}
