<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;
use App\User;

class Comment extends Model
{

    protected $fillable = [

        'article_id',
        'user_id',
        'body'
        
    ];

    public function article()
    {
        
        return $this->belongsTo(Article::class);
    }

    public function user()
    {
        
        return $this->belongsTo(User::class);
    }
}
