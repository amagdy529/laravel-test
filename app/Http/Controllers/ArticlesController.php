<?php

namespace App\Http\Controllers;


use App\Article;
use App\User;
use App\Http\Requests;
//use Request;
use Carbon\Carbon;
use App\Http\Requests\ArticleRequest;
use App\Repositories\articles;
use Illuminate\Http\Request;
use Illuminate\Http\Responce;

class ArticlesController extends Controller
{

    public function __construct()

    {

        $this->middleware('auth')->except(['index', 'show']);

    }

    public function index(Articles $articles)

    {
     
        $articles = $articles->all();
        // $articles = Article::latest()
        //         ->filter(request(['month', 'year']))
        //         ->get();

      
        
        return view ('articles.index', compact('articles'));
    }

    public function show($id)

    {
        $article = Article::findOrFail($id);
        
        return view ('articles.show', compact('article'));
    }

    public function create()

    {

        return view('articles.create');
    }

    public function store()
    
    {

        $this->validate(request(), [

            'body' => 'required',
            'title' => 'required'

        ]);

        auth()->user()->publish(

            new Article(request(['title', 'body']))
        );

        session()->flash('message', 'WOW!! Your article has been published!');
       
        return redirect('articles');
    }

    public function edit($id)

    {

        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));

    }

    public function update($id, ArticleRequest $request)

    {

        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect ('articles');

    }

    public function listdelete($id)
    
        {
    
            $article = Article::findOrFail($id);
            return view('articles.delete', compact('article'));
    
        }
    
        public function delete()
    
        {
    
            $article = Article::findOrFail($id);
            $article->delete();
            return redirect ('articles');
    
        }


}