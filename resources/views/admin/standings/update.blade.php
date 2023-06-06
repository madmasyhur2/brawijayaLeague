@extends('layouts.main')

<div class="flex">
    @include('admin.sidebar.sidebar')
    <div class="m-8 ml-44">
        <img src="{{'/storage/teamLogo/'.$tims->logo_tim}}" class="w-28 mx-auto my-5">
        <form action="/admin/standings/update/{{$tims->id}}" class="w-full grid grid-cols-2 gap-2" method="post" enctype="multipart/form-data">
            @csrf
            {{-- <p>Logo Tim</p>
            <input value="{{'../assets/teamLogo/'.$tims->logo_tim}}" type="file" id="logo" name="logo" accept="image/*" max="2097152" class="border rounded p-1 w-full"> --}}
            <p>Nama Tim</p>
            <input value="{{$tims->nama_tim}}" type="text" id="nama" name="nama" placeholder="Nama Tim" required class="border rounded p-1 w-full">
            <p>Menang</p>
            <input value="{{$tims->menang}}" type="number" id="Menang" name="menang" placeholder="Menang" required class="border rounded p-1 w-full">
            <p>Seri</p>
            <input value="{{$tims->seri}}" type="number" id="seri" name="seri" placeholder="Seri" required class="border rounded p-1 w-full">
            <p>Kalah</p>
            <input value="{{$tims->kalah}}" type="number" id="Kalah" name="Kalah" placeholder="Kalah" required class="border rounded p-1 w-full">
            <p>Gol</p>
            <input value="{{$tims->gol}}" type="number" id="gol" name="gol" placeholder="Gol" required class="border rounded p-1 w-full">
            <p>Kebobolan</p>
            <input value="{{$tims->kebobolan}}" type="number" id="Kebobolan" name="Kebobolan" placeholder="Kebobolan" required class="border rounded p-1 w-full">
            <input type="submit" value="Submit" class="border p-1 px-3 rounded-lg font-semibold bg-Secondary-1 cursor-pointer z-10">
        </form>
    </div>
</div>