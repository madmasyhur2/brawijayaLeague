@extends('layouts.main')
@include('navbar.navbar')

<main>
    <div class="halaman-article mx-[0%]">
        <h2 class="font-bold text-4xl text-[#0A0A0A]">{{ $post->judul }}</h2>
        <div class="ab-isi w-full">
            <p class="w-full text-right">{{ $post->created_at->format('d M Y') }}</p>
        </div>
        <div class="border-t-1 border-[#565656]">
            <hr class="my-0">
        </div>
        <img src="{{ '../storage/news/'.$post->gambar_berita }}" class="mx-40" alt="gambar-news">
        <div class="isi">
            <p class="text-justify mt-5 mb-10">{{ $post->isi }}</p>
        </div>
    </div>
</main>

@include('footer.footer')