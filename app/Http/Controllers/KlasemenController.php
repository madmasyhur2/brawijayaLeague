<?php

namespace App\Http\Controllers;

use App\Models\klasemen;
use App\Http\Requests\StoreklasemenRequest;
use App\Http\Requests\UpdateklasemenRequest;

class KlasemenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $klasemen = Klasemen::all()->orderBy('(menang * 3 + seri * 1)', 'ASC')->orderBy('(gol - kebobolan)', 'ASC');
        return view('klasemen.index', compact('klasemen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('klasemen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreklasemenRequest $request)
    {
        $validate = $request->validate([
            'logo_tim' => 'required|image|max:2048',
            'nama_tim' => 'required|max:255',
            'game' => 'required|integer',
            'menang' => 'required|integer',
            'seri' => 'required|integer',
            'kalah' => 'required|integer',
            'gol' => 'required|integer',
            'kebobolan' => 'required|integer',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(klasemen $klasemen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(klasemen $klasemen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateklasemenRequest $request, klasemen $klasemen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(klasemen $klasemen)
    {
        //
    }
}
