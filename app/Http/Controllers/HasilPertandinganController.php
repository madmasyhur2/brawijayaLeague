<?php

namespace App\Http\Controllers;

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
    // public function index()
    // {
    //     $hasil_pertandingan = Hasil_Pertandingan::groupBy('matchday')->paginate(10);
    //     return view('home', ['hasil_pertandingan' => $hasil_pertandingan]);
    // }
    public function showFixturesHome()
    {
        $hasil_pertandingan = Hasil_Pertandingan::groupBy('matchday')->paginate(10);
        return view('home', ['hasil_pertandingan' => $hasil_pertandingan]);
    }
    public function showScheduleAdmin() {
        $hasil_pertandingan = Hasil_Pertandingan::groupBy('matchday');
        return view('admin.pertandingan.pertandingan', ['hasil_pertandingan' => $hasil_pertandingan]);
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
        $hasil_pertandingans = hasil_pertandingan::all();
        return view('admin.hasil.hasil', ['hasil_pertandingan' => $hasil_pertandingans]);
    }
    function FixturesForm(){
        return view('admin.hasil.form');
    }
    function FixturesInsert(Request $request){
        $nama_tim_a = $request->input('timA');
        $skor_a = $request->input('skorA');
        $nama_tim_b = $request->input('timB');
        $skor_b = $request->input('skorB');
        $matchday = $request->input('matchday');

        $isInsertSuccress = hasil_pertandingan::insert(['nama_tim_a'=>$nama_tim_a,
                                                        'skor_a'=>$skor_a,
                                                        'nama_tim_b'=>$nama_tim_b,
                                                        'skor_b'=>$skor_b,
                                                        'matchday'=>$matchday]);
        
        return redirect('/admin/fixtures')->with('success', 'Hasil Pertandingan berhasil ditambahkan');
    }
    public function FixturesDelete($id){
        $hasil_pertandingans = hasil_pertandingan::find($id);
        $hasil_pertandingans->delete();
        return redirect('/admin/fixtures')->with('success', 'Hasil Pertandingan berhasil dihapus.');;
    }
    public function FixturesEdit(hasil_pertandingan $hasil_pertandingan, Tim $tims){
        return view('admin.hasil.update', [
            'hasil_pertandingan' => $hasil_pertandingan,
            'tim' => Tim::all(),
        ]);
    }
}
