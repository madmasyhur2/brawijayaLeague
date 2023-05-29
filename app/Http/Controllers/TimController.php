<?php

namespace App\Http\Controllers;

use App\Models\tim;
use App\Http\Requests\StoretimRequest;
use App\Http\Requests\UpdatetimRequest;

class TimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tim = Tim::all();
        return view('tim.index', compact('tim'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tim.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretimRequest $request)
    {
        // Validasi input data
        $validatedData = $request->validate([
            'logo_tim' => 'required|image|max:2048',
            'nama_tim' => 'required|max:255',
            'pos' => 'required|integer',
            'poin' => 'required|integer',
            'menang' => 'required|integer',
            'seri' => 'required|integer',
            'kalah' => 'required|integer',
            'gol' => 'required|integer',
            'kebobolan' => 'required|integer',
        ]);
        // Upload File
        $logoPath = $request->file('logo_tim')->store('public/logos');
        
        // Membuat data baru
        $tim = new Tim();
        $tim->logo_tim = $logoPath;
        $tim->nama_tim = $request->input('nama_tim');
        $tim->pos = $request->input('pos');
        $tim->poin = $request->input('poin');
        $tim->menang = $request->input('menang');
        $tim->seri = $request->input('seri');
        $tim->kalah = $request->input('kalah');
        $tim->gol = $request->input('gol');
        $tim->kebobolan = $request->input('kebobolan');
        
        // Menyimpan data ke dalam database
        $tim->save();

        // Memberikan pesan berhasil
        return redirect('/tim')->with('success', 'Data tim berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(tim $tim)
    {
        $tim = Tim::findOrFail($tim);
        return view('tim.show', compact('tim'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tim $tim)
    {
        $tim = Tim::findOrFail($tim);
        return view('tim.edit', compact('tim'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetimRequest $request, tim $tim)
    {
        // Validasi input data
        $validate = $request->validate([
            'logo_tim' => 'image|max:2048',
            'nama_tim' => 'required|max:255',
            'pos' => 'required|integer',
            'poin' => 'required|integer',
            'menang' => 'required|integer',
            'seri' => 'required|integer',
            'kalah' => 'required|integer',
            'gol' => 'required|integer',
            'kebobolan' => 'required|integer',
        ]);

        $tim = Tim::findOrFail($tim);

        // Mengunggah file logo tim jika ada
        if ($request->hasFile('logo_tim')) {
            // Menghapus file logo tim lama (opsional)
            // Storage::delete($tim->logo_tim);

            // Mengunggah file logo tim baru
            $logoPath = $request->file('logo_tim')->store('public/logos');
            $tim->logo_tim = $logoPath;
        }

        // Memperbarui data tim
        $tim->nama_tim = $request->input('nama_tim');
        $tim->pos = $request->input('pos');
        $tim->poin = $request->input('poin');
        $tim->menang = $request->input('menang');
        $tim->seri = $request->input('seri');
        $tim->kalah = $request->input('kalah');
        $tim->gol = $request->input('gol');
        $tim->kebobolan = $request->input('kebobolan');
        
        // Menyimpan data yang diperbarui ke dalam database
        $tim->save();
        
        // Memberikan pesan berhasil
        return redirect('/tim')->with('success', 'Data tim berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tim $tim)
    {
        $tim = Tim::findOrFail($tim);

        //mengapusa file logo tim (opsional)
        //Storage::delete($tim->logo_tim);

        //mengapus data tim dari database
        $tim->delete();

        // Memberikan pesan berhasil
        return redirect('/tim')->with('success', 'Data tim berhasil dihapus.');
    }
}
