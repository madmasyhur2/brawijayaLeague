<?php

namespace App\Http\Controllers;

use App\Models\hasil_pertandingan;
use App\Http\Requests\Storehasil_pertandinganRequest;
use App\Http\Requests\Updatehasil_pertandinganRequest;

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
}
