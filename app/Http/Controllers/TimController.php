<?php

namespace App\Http\Controllers;

use App\Models\tim;
use App\Http\Requests\StoretimRequest;
use App\Http\Requests\UpdatetimRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index() {
        $tims = Tim::orderByRaw("(menang * 3 + seri) DESC")->orderByRaw("(gol - kebobolan) DESC")->get();
        return view('standings.standings', ['tim' => $tims]);
    }
    public function indexteams() {
        $tims = Tim::orderByRaw("(menang * 3 + seri) DESC")->orderByRaw("(gol - kebobolan) DESC")->get();
        return view('teams.teams', ['tim' => $tims]);
    }

    public function dropDown() {
        $tims = Tim::all();
        return view('admin.pertandingan.form', ['tim' => $tims]);
    }
    public function dropDownupdate() {
        $tims = Tim::all();
        return view('admin.pertandingan.update', ['tim' => $tims]);
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
            $imageLink = $request->file('logo')->hashName();
        }
        $isInsertSuccress = tim::insert(['logo_tim'=>$imageLink,
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
        if ($tims->logo_tim) {
            Storage::delete('public/assets/teamLogo/'.$tims->logo_tim);
        }
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
        $tims->nama_tim = $request->input('nama');
        $tims->menang = $request->input('menang');
        $tims->seri = $request->input('seri');
        $tims->kalah = $request->input('Kalah');
        $tims->gol = $request->input('gol');
        $tims->kebobolan = $request->input('Kebobolan');

        $tims -> update();
        return redirect('/admin/standings')->with('success', 'Data tim berhasil diperbarui.');;
    }
}
