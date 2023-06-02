<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Http\Requests\StorepostRequest;
use App\Http\Requests\UpdatepostRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('news.news', [
            "posts" => Post::all(),
        ]);

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
}
