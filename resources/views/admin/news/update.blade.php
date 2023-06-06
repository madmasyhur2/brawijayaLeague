@extends('layouts.main')

<div class="flex">
    @include('admin.sidebar.sidebar')
    <div class="m-8 ml-44">
        <img src="{{'/storage/news/'.$pos->gambar_berita}}" class="w-60 mx-auto my-5">
        <form action="/admin/news/update/{{$pos->id}}" class="w-full grid grid-cols-2 gap-2" method="post" enctype="multipart/form-data">
            @csrf
            <p>Judul</p>
            <input value="{{$pos->judul}}" type="text" id="judul" name="judul" placeholder="Judul" required class="border rounded p-1 w-full">
            {{-- <p>Gambar</p>
            <input type="file" id="gambar" name="gambar" accept="image/*" max="2097152" required class="border rounded p-1 w-full"> --}}
            {{-- <p>Date</p>
            <input value="{{$pos->created_at}}" type="date" id="date" name="date" required class="border rounded p-1 w-full"> --}}
            <p>Isi</p>
            <input value="{{$pos->isi}}" type="text" id="isi" name="isi" placeholder="Isi" required class="border rounded p-1 w-full">
            <input  type="submit" value="Submit" class="border p-1 px-3 rounded-lg font-semibold bg-Secondary-1 cursor-pointer z-10>
        </form>
    </div>
</div>