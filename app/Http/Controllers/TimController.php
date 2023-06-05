<?php

namespace App\Http\Controllers;

use App\Models\tim;
use App\Http\Requests\StoretimRequest;
use App\Http\Requests\UpdatetimRequest;
use Illuminate\Http\Request;

class TimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index() {
        $tims = Tim::orderByRaw("(menang * 3 + seri) DESC")->orderByRaw("(gol - kebobolan) DESC")->get();
        return view('standings.standings', ['tim' => $tims]);
    }

    public function dropDown() {
        $tims = Tim::all();
        return view('admin.pertandingan.form', ['tim' => $tims]);
    }
    public function dropDownupdate() {
        $tims = Tim::all();
        return view('admin.pertandingan.update', ['tim' => $tims]);
    }
    public function dropDownhasil() {
        $tims = Tim::all();
        return view('admin.hasil.form', ['tim' => $tims]);
    }
    public function dropDownEdit() {
        $tims = Tim::all();
        return view('admin.hasil.update', ['tim' => $tims]);
    }
    public function teamlist() {
        $tims = Tim::all();
        return view('admin.hasil.form', ['tim' => $tims]);
    }
    public function showNameTim() {
        $tims = Tim::orderBy('nama_tim', 'asc')->get();
        return view('teams.teams', ['tim' => $tims]);
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
    // public function store(StoretimRequest $request)
    // {
    //     // Validasi input data
    //     $validate = $request->validate([
    //         'logo_tim' => 'required|image|max:2048|mimes:jpeg,jpg,png,svg',
    //         'nama_tim' => 'required|max:255',
    //         // 'pos' => 'required|integer',
    //         'poin' => 'required|integer',
    //         'menang' => 'required|integer',
    //         'seri' => 'required|integer',
    //         'kalah' => 'required|integer',
    //         'gol' => 'required|integer',
    //         'kebobolan' => 'required|integer',
    //     ]);
    //     // Upload File
    //     $logoPath = $request->file('logo_tim')->store('public/logos');
        
    //     // Membuat data baru
    //     $tim = new Tim();
    //     $tim->logo_tim = $logoPath;
    //     $tim->nama_tim = $request->input('nama_tim');
    //     // $tim->pos = $request->input('pos');
    //     $tim->poin = $request->input('poin');
    //     $tim->menang = $request->input('menang');
    //     $tim->seri = $request->input('seri');
    //     $tim->kalah = $request->input('kalah');
    //     $tim->gol = $request->input('gol');
    //     $tim->kebobolan = $request->input('kebobolan');
        
    //     // Menyimpan data ke dalam database
    //     $tim->save();

    //     // Memberikan pesan berhasil
    //     return redirect('/tim')->with('success', 'Data tim berhasil ditambahkan');
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(tim $tim)
    // {
    //     $tim = Tim::findOrFail($tim);
    //     return view('tim.show', compact('tim'));
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(tim $tim)
    // {
    //     $tim = Tim::findOrFail($tim);
    //     return view('tim.edit', compact('tim'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(UpdatetimRequest $request, tim $tim)
    // {
    //     // Validasi input data
    //     $validate = $request->validate([
    //         'logo_tim' => 'image|max:2048',
    //         'nama_tim' => 'required|max:255',
    //         // 'pos' => 'required|integer',
    //         'poin' => 'required|integer',
    //         'menang' => 'required|integer',
    //         'seri' => 'required|integer',
    //         'kalah' => 'required|integer',
    //         'gol' => 'required|integer',
    //         'kebobolan' => 'required|integer',
    //     ]);

    //     $tim = Tim::findOrFail($tim);

    //     // Mengunggah file logo tim jika ada
    //     if ($request->hasFile('logo_tim')) {
    //         // Menghapus file logo tim lama (opsional)
    //         // Storage::delete($tim->logo_tim);

    //         // Mengunggah file logo tim baru
    //         $logoPath = $request->file('logo_tim')->store('public/logos');
    //         $tim->logo_tim = $logoPath;
    //     }

    //     // Memperbarui data tim
    //     $tim->nama_tim = $request->input('nama_tim');
    //     // $tim->pos = $request->input('pos');
    //     $tim->poin = $request->input('poin');
    //     $tim->menang = $request->input('menang');
    //     $tim->seri = $request->input('seri');
    //     $tim->kalah = $request->input('kalah');
    //     $tim->gol = $request->input('gol');
    //     $tim->kebobolan = $request->input('kebobolan');
        
    //     // Menyimpan data yang diperbarui ke dalam database
    //     $tim->save();
        
    //     // Memberikan pesan berhasil
    //     return redirect('/tim')->with('success', 'Data tim berhasil diperbarui.');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(tim $tim)
    // {
    //     $tim = Tim::findOrFail($tim);

    //     //mengapus file logo tim (opsional)
    //     //Storage::delete($tim->logo_tim);

    //     //mengapus data tim dari database
    //     $tim->delete();

    //     // Memberikan pesan berhasil
    //     return redirect('/tim')->with('success', 'Data tim berhasil dihapus.');
    // }
    public function showNameTimAdmin() {
        $tims = Tim::orderBy('nama_tim', 'asc')->get();
        return view('admin.standings.standings', ['tim' => $tims]);
    }
    function StandingForm(){
        return view('admin.standings.form');
    }
    function StandingsInsert(Request $request){
        $logo_tim = $request->input('logo');
        $nama_tim = $request->input('nama');
        $menang = $request->input('menang');
        $seri = $request->input('seri');
        $kalah = $request->input('Kalah');
        $gol = $request->input('gol');
        $kebobolan = $request->input('Kebobolan');
        
        if ($request->hasFile('logo')) {
            $validated['logo_tim'] = $request->file('logo')->store('public/assets/teamLogo');
        }

        $isInsertSuccress = tim::insert(['logo_tim'=>$logo_tim,
                                        'nama_tim'=>$nama_tim,
                                        'menang'=>$menang,
                                        'seri'=>$seri,
                                        'kalah'=>$kalah,
                                        'gol'=>$gol,
                                        'kebobolan'=>$kebobolan]);
        
        if($isInsertSuccress){
            return redirect('/admin/standings')->with('success', 'Data tim berhasil ditambahkan');
        }
        return redirect('/admin/standings')->with('gagal', 'Data tim gagal ditambahkan');
    }
    public function StandingsDelete($id){
        $tims = tim::find($id);
        $tims->delete();
        return redirect('/admin/standings')->with('success', 'Data tim berhasil dihapus.');;
    }
    public function StandingsEdit(tim $tims){
        return view('admin.standings.update', [
            'tims' => $tims,
        ]);
    }
    public function StandingsUpdate(Request $request,$id){
        $tims = tim::find($id);
        // $tims->logo_tim = $request->input('logo');
        $tims->nama_tim = $request->input('nama');
        $tims->menang = $request->input('menang');
        $tims->seri = $request->input('seri');
        $tims->kalah = $request->input('Kalah');
        $tims->gol = $request->input('gol');
        $tims->kebobolan = $request->input('Kebobolan');
        $tims -> update();

        if ($request->hasFile('logo_tim')) {
            $logoPath = $request->file('logo_tim')->store('storage/teamLogo/');
            $tims->logo_tim = $logoPath;
        }
        return redirect('/admin/standings')->with('success', 'Data tim berhasil diperbarui.');;
    }
}
