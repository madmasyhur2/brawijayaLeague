<?php

namespace App\Http\Controllers;

use App\Models\pertandingan;
use App\Http\Requests\StorepertandinganRequest;
use App\Http\Requests\UpdatepertandinganRequest;
use App\Models\tim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertandinganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('schedules.schedules', [
            "pertandingans" => DB::table('pertandingans')
                                ->join('tims as home', 'pertandingans.home_id', '=', 'home.id')
                                ->join('tims as away', 'pertandingans.away_id', '=', 'away.id')
                                ->select('home.logo_tim as home_logo', 'home.nama_tim as home_name', 'away.logo_tim as away_logo', 'away.nama_tim as away_name', 'pertandingans.*')
                                ->whereExists(function ($query) {
                                    $query->select(DB::raw(1))
                                        ->from('pertandingans')
                                        ->whereColumn('home.id', 'pertandingans.home_id');
                                })
                                ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pertandingan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepertandinganRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pertandingan $pertandingan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pertandingan $pertandingan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepertandinganRequest $request, pertandingan $pertandingan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pertandingan $pertandingan)
    {
        //
    }
    function showScheduleAdmin(){
        return view('admin.pertandingan.pertandingan', [
            "pertandingans" => DB::table('pertandingans')
                                ->join('tims as home', 'pertandingans.home_id', '=', 'home.id')
                                ->join('tims as away', 'pertandingans.away_id', '=', 'away.id')
                                ->select('home.logo_tim as home_logo', 'home.nama_tim as home_name', 'away.logo_tim as away_logo', 'away.nama_tim as away_name', 'pertandingans.*')
                                ->whereExists(function ($query) {
                                    $query->select(DB::raw(1))
                                        ->from('pertandingans')
                                        ->whereColumn('home.id', 'pertandingans.home_id');
                                })
                                ->get()
        ]);
    }
    function ScheduleForm(){
        return view('admin.pertandingan.form');
    }
    function ScheduleInsert(Request $request){
        $home_tim = $request->input('timA');
        $away_tim = $request->input('timB');
        $matchday = $request->input('matchday');
        $tanggal = $request->input('date');

        $isInsertSuccress = pertandingan::insert(['home_tim'=>$home_tim,
                                        'away_tim'=>$away_tim,
                                        'matchday'=>$matchday,
                                        'tanggal'=>$tanggal]);
        
        return redirect('/admin/schedule')->with('success', 'Jadwal berhasil ditambahkan');
    }
    public function ScheduleDelete($id){
        $pertandingans = pertandingan::find($id);
        $pertandingans->delete();
        return redirect('/admin/schedule')->with('success', 'Jadwal berhasil dihapus.');;
    }
    public function ScheduleEdit(pertandingan $pertandingan, tim $tims){
        return view('admin.pertandingan.update', [
            'pertandingan' => $pertandingan,
            'tim' => Tim::all(),
        ]);
    }
}
