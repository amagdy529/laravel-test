<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Article;
use App\Comment;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function article()
    {
        
        return $this->hasMany(Article::class);
    }

    public function comments()
    {
        
        return $this->hasMany(Comment::class);
    }

    public function publish(Article $article)
    {

        $this->article()->save($article);
      

    }

}
