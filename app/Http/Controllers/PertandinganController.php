<?php

namespace App\Http\Controllers;

use App\Models\pertandingan;
use App\Http\Requests\StorepertandinganRequest;
use App\Http\Requests\UpdatepertandinganRequest;

class PertandinganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pertandingan = Pertandingan::all()->order('matchday', 'DESC')->order('jam', 'DESC');
        return view('pertandingan.index', compact('pertandingan'));
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
}
