<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
       
        $people = [
            'Gehad', 'Mama', 'Papa', 'Eslam'
        ];

        return view('pages.about', compact('people'));
    }

    public function contact(){
        return view('pages.contact');
    }
}
