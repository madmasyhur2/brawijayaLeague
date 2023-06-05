<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        // $tims = Tim::orderByRaw("(menang * 3 + seri) DESC")->orderByRaw("(gol - kebobolan) DESC")->get();
        return view('news.news');
    }

    public function showDetail(){
        return view('news.article');
    }
}
