<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
            "pertandingans" => DB::table('tims')
                                ->join('pertandingans', 'tims.id', '=', 'pertandingans.home_id')
                                ->select('tims.*', 'pertandingans.*')
                                ->whereExists(function ($query) {
                                    $query->select(DB::raw(1))
                                        ->from('pertandingans')
                                        ->whereRaw('tims.id = pertandingans.home_id')
                                        ->orderBy('matchday', 'ASC')
                                        ->orderBy('tanggal', 'ASC');
                                })
                                ->paginate(5),
            "hasil_pertandingans" => Hasil_Pertandingan::all(),
        ]);
    }
}
