@extends('layouts.main')
@include('navbar.navbar')

<main>
    <div class="halaman-article">
        <h2 class="font-bold text-[36px] text-[#0A0A0A] m-4 mt-2 font-['Roboto']">{{ $post->judul }}</h2>
        <div class="profile">
            <div class="ab-isi">
                <p class="ab-nama">Admin</p>
                <p>{{ $post->created_at->format('d M Y') }}</p>
            </div>
        </div>
        <img src="{{ '../storage/news/'.$post->gambar_berita }}" class="" alt="gambar-news">
        <div class="isi">
            <p class=>{{ $post->isi }}</p>
        </div>
    </div>
</main>

@include('footer.footer')