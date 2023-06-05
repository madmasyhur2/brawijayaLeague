<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        return view('news.news', ['post' => post::all()]);
    }

    public function showDetail(){
        return view('news.article');
    }
}
