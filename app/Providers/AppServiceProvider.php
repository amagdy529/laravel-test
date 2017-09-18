<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use App\Article;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('articles.sidebar', function($view){

            $archives = \App\Article::archives();
            $tags = \App\Tag::has('articles')->pluck('name');
            $view->with(compact('archives', 'tags'));
         

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
