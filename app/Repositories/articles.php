<?php

namespace App\Repositories;

use App\Article;

class articles

{

    public function all()
    {
        return Article::all();
    }

}