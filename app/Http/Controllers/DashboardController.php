<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tim;
use App\Models\post;
use App\Models\hasil_pertandingan;
use App\Models\pertandingan;

class DashboardController extends Controller
{
    public function index()
    {
        return view('home', [
            "tims" => Tim::orderByRaw("(menang * 3 + seri) DESC")->orderByRaw("(gol - kebobolan) DESC")->paginate(19),
            "posts" => Post::all(), 
            "pertandingans" => Pertandingan::orderBy('matchday', 'ASC')->orderBy('jam','ASC')->paginate(5),
            // "pertandingans" => Pertandingan::with('tim')->get(),
            "hasil_pertandingans" => Hasil_Pertandingan::all(),
        ]);
    }
}
