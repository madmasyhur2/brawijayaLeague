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
    public function index(Request $request)
    {
        $name = $request->input('category');
        $names = explode(" ", $name);
        if($names[0] == "matchday")
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
                                    ->where(function($query) use ($names) {
                                        $query->where('matchday', '=', $names[1]);
                                    })
                                    ->orderBy('matchday','ASC')
                                    ->get()
            ]);
        else 
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
                                    ->where(function($query) use ($name) {
                                        $query->where('home.nama_tim', 'like', '%' . $name . '%')
                                        ->orWhere('away.nama_tim', 'like', '%' . $name . '%');
                                    })
                                    ->orderBy('matchday','ASC')
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
                                ->get(),
        ]);
    }
    public function dropDownhasil() {
        $pertandingans = pertandingan::all();
        return view('admin.hasil.form', [
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

        $home_id = DB::table('tims')->select('id')->where('nama_tim', $home_tim)->first()->id;
        $away_id = DB::table('tims')->select('id')->where('nama_tim', $away_tim)->first()->id;
        $isInsertSuccress = pertandingan::insert(['home_id'=>$home_id,
                                        'away_id'=>$away_id,
                                        'matchday'=>$matchday,
                                        'tanggal'=>$tanggal]);
        
        return redirect('/admin/schedule')->with('success', 'Jadwal berhasil ditambahkan');
    }
    public function ScheduleDelete($id){
        $pertandingans = pertandingan::find($id);
        $pertandingans->delete();
        return redirect('/admin/schedule')->with('success', 'Jadwal berhasil dihapus.');;
    }
    public function ScheduleEdit($id, tim $tims){
        return view('admin.pertandingan.update', [
            $pertandingan = pertandingan::find($id),
            'pertandingan' => $pertandingan,
            'tim' => Tim::all(),
            "pertandingans" => DB::table('pertandingans')
                                ->join('tims as home', 'pertandingans.home_id', '=', 'home.id')
                                ->join('tims as away', 'pertandingans.away_id', '=', 'away.id')
                                ->select('home.nama_tim as home_name', 'away.nama_tim as away_name', 'pertandingans.*')
                                ->whereExists(function ($query) {
                                    $query->select(DB::raw(1))
                                        ->from('pertandingans')
                                        ->whereColumn('home.id', 'pertandingans.home_id');
                                })
                                ->get()
        ]);
    }
    public function ScheduleUpdate(Request $request,$id){
        $pertandingans = pertandingan::find($id);
        $home_tim = $request->input('timA');
        $away_tim = $request->input('timB');
        $pertandingans->matchday = $request->input('matchday');
        $pertandingans->tanggal = $request->input('date');

        $pertandingans->home_id = DB::table('tims')->select('id')->where('nama_tim', $home_tim)->first()->id;
        $pertandingans->away_id = DB::table('tims')->select('id')->where('nama_tim', $away_tim)->first()->id;

        $pertandingans->update();

        return redirect('/admin/schedule')->with('success', 'Berita berhasil diperbarui.');;
    }
}
