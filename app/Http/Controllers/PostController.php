<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Http\Requests\StorepostRequest;
use App\Http\Requests\UpdatepostRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            return view('news.news', ['post' => post::all()]);
    }

    public function showDetail(){
        return view('news.article');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepostRequest $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string',
            'gambar_berita' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'isi' => 'required|string',
        ]);

        // Mengambil input gambar
        $gambar_beritaPath = $request->file('gambar_berita')->store('public/newsImage');

        // Mengambil tanggal publikasi saat ini
        $dt = Carbon::now();
        $tgl_publikasi = $dt->toFormattedDateString();

        // Buat objek Post baru
        $post = new Post;
        $post->judul = $request->judul;
        $post->gambar_berita = $gambar_beritaPath;
        $post->tgl_publikasi = $tgl_publikasi;
        $post->isi = $request->isi;

        // Simpan objek Post
        $post->save();

        // Memberikan pesan ketika berhasil
        return redirect()->route('post.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        $post = Post::findOrFail($post);
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        $post = Post::findOrFail($post);
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepostRequest $request, post $post)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string',
            'gambar_berita' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'isi' => 'required|string',
        ]);

        // Temukan post berdasarkan ID
        $post = Post::find($post);

        // Periksa apakah post ditemukan
        if (!$post) {
            return redirect()->route('post.index')->with('error', 'Berita tidak ditemukan.');
        }

        // Update atribut post dengan data yang diberikan
        if ($request->hasFile('gambar_berita')) {
            $request->validate([
                'gambar_berita' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
    
            // Menghapus gambar lama
            Storage::disk('public/newsImage')->delete($post->gambar_berita);
    
            // Mengambil input gambar baru
            $gambar_berita = $request->file('gambar_berita');
            $gambar_berita_path = $gambar_berita->store('gambar', 'public');
    
            // Mengupdate path gambar
            $post->gambar_berita = $gambar_berita_path;
        }

        // Mengupdate tanggal publikasi saat ini
        $post->tgl_publikasi = Carbon::now();

        // Simpan perubahan pada post
        $post->save();

        // Berikan respons jika berhasil
        return redirect()->route('post.show', $post->id)->with('success', 'Berita berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        // Temukan post berdasarkan ID
        $post = Post::findOrFail($post);

        // Hapus gambar terkait
        Storage::disk('public')->delete($post->gambar_berita);
    
        // Hapus post dari database
        $post->delete();

        // Berikan respons jika berhasil
        return redirect()->route('post.index')->with('success', 'Berita berhasil dihapus.');
    }
    public function showNewsAdmin() {
        $posts = post::all();
        return view('admin.news.news', ['pos' => $posts]);
    }
    function Newsform(){
        return view('admin.news.form');
    }
    function NewsInsert(Request $request){
        $judul = $request->input('judul');
        $gambar_berita = $request->input('gambar');
        $tgl_publikasi = $request->input('judul');
        $isi = $request->input('isi');

        $isInsertSuccress = post::insert(['judul'=>$judul,
                                        'gambar_berita'=>$gambar_berita,
                                        'tgl_publikasi'=>$tgl_publikasi,
                                        'isi'=>$isi]);
        if ($request->hasFile('gambar_berita')) {
            $validated['image'] = $request->file('image')->store('../assets/news/');
        }
        
        return redirect('/admin/news')->with('success', 'Berita berhasil ditambahkan');
    }
    public function NewsDelete($id){
        $posts = post::find($id);
        $posts->delete();
        return redirect('/admin/news')->with('success', 'Berita berhasil dihapus.');;
    }
    public function NewsEdit(post $posts){
        return view('admin.news.update', [
            'pos' => $posts,
        ]);
    }
    public function NewsUpdate(Request $request,$id){
        $posts = post::find($id);
        $posts->judul = $request->input('judul');
        // $posts->gambar_berita = $request->input('gambar');
        // $posts->tgl_publikasi = $request->input('judul');
        $posts->isi = $request->input('isi');
        $posts->update();

        if ($request->hasFile('gambar')) {
            $logoPath = $request->file('logo_tim')->store('../assets/news/');
            $posts->logo_tim = $logoPath;
        }
        return redirect('/admin/news')->with('success', 'Berita berhasil diperbarui.');;
    }
}
