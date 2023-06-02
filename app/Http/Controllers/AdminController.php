<?php
namespace App\Http\ControllerDispatcher;
use Illuminate\Http\Request;

class AdminController extends Controller{
    function FormStandings(){
        return view('admin.standings.form');
    }
    function StandingsInsert(){
        // 'logo_tim'
        // 'nama_tim'
        // 'menang'
        // 'seri'
        // 'kalah'
        // 'gol'
        // 'kebobolan'
    }
}
