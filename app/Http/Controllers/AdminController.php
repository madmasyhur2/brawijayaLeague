<?php
namespace App\Http\ControllerDispatcher;
use Illuminate\Http\Request;

class AdminController extends Controller{
    function FormStandings(){
        return view('admin.standings.form');
    }
    function StandingsInsert(Request $request){
        $logo_tim = $request->input('logo');
        $nama_tim = $request->input('nama');
        $menang = $request->input('menang');
        $seri = $request->input('seri');
        $kalah = $request->input('kalah');
        $gol = $request->input('gol');
        $kebobolan = $request->input('kebobolan');
    }
}
