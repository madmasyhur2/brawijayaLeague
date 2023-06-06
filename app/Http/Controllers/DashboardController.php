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
            "postFirst" => Post::first(),
            "posts" => Post::paginate(7), 
            "pertandingans" => DB::table('pertandingans')
                                ->join('tims as home', 'pertandingans.home_id', '=', 'home.id')
                                ->join('tims as away', 'pertandingans.away_id', '=', 'away.id')
                                ->select('home.logo_tim as home_logo', 'away.logo_tim as away_logo', 'pertandingans.*')
                                ->whereExists(function ($query) {
                                    $query->select(DB::raw(1))
                                        ->from('pertandingans')
                                        ->whereColumn('home.id', 'pertandingans.home_id');
                                })->paginate(5),
            "hasil_pertandingan" => DB::table('hasil_pertandingans')
                                    ->join('pertandingans', 'hasil_pertandingans.pertandingans_id', '=', 'pertandingans.id')
                                    ->join('tims as home', 'pertandingans.home_id', '=', 'home.id')
                                    ->join('tims as away', 'pertandingans.away_id', '=', 'away.id')
                                    ->select('home.logo_tim as home_logo', 'away.logo_tim as away_logo', 'home.nama_tim as home_name', 'away.nama_tim as away_name', 'pertandingans.*', 'hasil_pertandingans.*')
                                    ->whereExists(function ($query) {
                                        $query->select(DB::raw(1))
                                            ->from('hasil_pertandingans')
                                            ->whereColumn('pertandingans.id', 'hasil_pertandingans.pertandingans_id')
                                            ->groupBy('matchday');
                                    })->paginate(10),
            "hasil_pertandingans" => DB::table('hasil_pertandingans')
                                    ->join('pertandingans', 'hasil_pertandingans.pertandingans_id', '=', 'pertandingans.id')
                                    ->join('tims as home', 'pertandingans.home_id', '=', 'home.id')
                                    ->join('tims as away', 'pertandingans.away_id', '=', 'away.id')
                                    ->select('home.logo_tim as home_logo', 'away.logo_tim as away_logo', 'home.nama_tim as home_name', 'away.nama_tim as away_name', 'pertandingans.*', 'hasil_pertandingans.*')
                                    ->whereExists(function ($query) {
                                        $query->select(DB::raw(1))
                                            ->from('hasil_pertandingans')
                                            ->whereColumn('pertandingans.id', 'hasil_pertandingans.pertandingans_id');
                                    })->paginate(4),
        ]); 
    }
}
