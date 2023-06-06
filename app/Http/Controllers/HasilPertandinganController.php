<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\hasil_pertandingan;
use App\Models\Tim;
use App\Http\Requests\Storehasil_pertandinganRequest;
use App\Http\Requests\Updatehasil_pertandinganRequest;
use Illuminate\Http\Request;


class HasilPertandinganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hasil_pertandingan = DB::table('hasil_pertandingans')
                                ->join('pertandingans', 'hasil_pertandingans.pertandingans_id', '=', 'pertandingans.id')
                                ->join('tims as home', 'pertandingans.home_id', '=', 'home.id')
                                ->join('tims as away', 'pertandingans.away_id', '=', 'away.id')
                                ->select('home.logo_tim as home_logo', 'away.logo_tim as away_logo', 'home.nama_tim as home_name', 'away.nama_tim as away_name', 'pertandingans.*', 'hasil_pertandingans.*')
                                ->whereExists(function ($query) {
                                    $query->select(DB::raw(1))
                                        ->from('hasil_pertandingans')
                                        ->whereColumn('pertandingans.id', 'hasil_pertandingans.pertandingans_id');
                                })->get();
        return view('highlights.highlights', ['hasilPertandingan' => $hasil_pertandingan]);
    }
    public function showFixturesHome()
    {
        $hasil_pertandingan = Hasil_Pertandingan::groupBy('matchday')->paginate(10);
        return view('home', ['hasil_pertandingan' => $hasil_pertandingan]);
    }
    public function showScheduleAdmin() {
        $hasil_pertandingan = Hasil_Pertandingan::groupBy('matchday');
        return view('admin.pertandingan.pertandingan', ['hasil_pertandingan' => $hasil_pertandingan]);
    }

    public function showGambar() {
        $hasil_pertandingan = Hasil_Pertandingan::all();
        return view('gallery.gallery', ['hasil_pertandingan' => $hasil_pertandingan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storehasil_pertandinganRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(hasil_pertandingan $hasil_pertandingan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hasil_pertandingan $hasil_pertandingan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatehasil_pertandinganRequest $request, hasil_pertandingan $hasil_pertandingan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hasil_pertandingan $hasil_pertandingan)
    {
        //
    }
    function showFixturesAdmin(){
        $hasil_pertandingans = hasil_pertandingan::groupBy('matchday');
        return view('admin.hasil.hasil', [
            "hasil_pertandingans" => DB::table('hasil_pertandingans')
            ->join('pertandingans', 'hasil_pertandingans.pertandingans_id', '=', 'pertandingans.id')
            ->join('tims as home', 'pertandingans.home_id', '=', 'home.id')
            ->join('tims as away', 'pertandingans.away_id', '=', 'away.id')
            ->select('home.logo_tim as home_logo', 'away.logo_tim as away_logo', 'home.nama_tim as home_name', 'away.nama_tim as away_name', 'pertandingans.*', 'hasil_pertandingans.*')
            ->whereExists(function ($query) {
                $query->select(DB::raw(1))
                    ->from('hasil_pertandingans')
                    ->whereColumn('pertandingans.id', 'hasil_pertandingans.pertandingans_id');
            })->get()
        ]);
    }
    function FixturesInsert(Request $request){
        $pertandingans_id = $request->input('pertandinganID');
        $skor_home = $request->input('skorHome');
        $skor_away = $request->input('skorAway');

        $isInsertSuccress = hasil_pertandingan::insert(['pertandingans_id'=>$pertandingans_id,
                                                        'skor_home'=>$skor_home,
                                                        'skor_away'=>$skor_away]);
        
        return redirect('/admin/fixtures')->with('success', 'Hasil Pertandingan berhasil ditambahkan');
    }
    public function FixturesDelete($id){
        $hasil_pertandingans = hasil_pertandingan::find($id);
        $hasil_pertandingans->delete();
        return redirect('/admin/fixtures')->with('success', 'Hasil Pertandingan berhasil dihapus.');;
    }
    public function FixturesEdit(hasil_pertandingan $hasil_pertandingan, Tim $tims){
        return view('admin.hasil.update', [
            'hasil_pertandingan' => hasil_pertandingan::first(),
            "pertandingans" => DB::table('pertandingans')
                        ->join  ('tims as home', 'pertandingans.home_id', '=', 'home.id')
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
    public function FixturesUpdate(Request $request,$id){
        $hasil_pertandingans = hasil_pertandingan::find($id);
        $hasil_pertandingans->skor_home = $request->input('skorHome');
        $hasil_pertandingans->skor_away = $request->input('skorAway');

        $hasil_pertandingans->update();

        return redirect('/admin/fixtures')->with('success', 'Hasil Pertandingan berhasil diperbarui.');;
    }
}
