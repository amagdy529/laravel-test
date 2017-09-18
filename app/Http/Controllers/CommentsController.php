<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Article $article)
    {

        $this->validate(request(), ['body' => 'required|min:2']);
        \Auth::user();
        
        $article->addComment(['body'=>request('body'),'user_id'=>\Auth::user()->id]);

        return back();
    }
}
