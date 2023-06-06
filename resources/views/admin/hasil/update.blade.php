@extends('layouts.main')

<div class="flex">
    @include('admin.sidebar.sidebar')
    <div class="m-8 ml-44">
        <form action="/admin/fixtures/update/{{$hasil_pertandingan->id}}" class="w-full grid grid-cols-2 gap-2" method="post" enctype="multipart/form-data">
            @csrf
            {{-- <p>Tim Home</p>
            @foreach($pertandingans as $p)
                <p>{{$p->home_name}}</p>
            @endforeach
            <p>Tim Away</p>
            @foreach($pertandingans as $p)
                <p>{{$p->away_name}}</p>
            @endforeach --}}
            <p>Skor Tim Home</p>
            <input value="{{$hasil_pertandingan->skor_home}}" type="number" id="skorA" name="skorA" placeholder="Skor Tim A" class="border rounded p-1 w-full">
            <p>Skor Tim Away</p>
            <input value="{{$hasil_pertandingan->skor_away}}"  type="number" id="skorB" name="skorB" placeholder="Skor Tim B" class="border rounded p-1 w-full">
            <input type="submit" value="Submit" class="border p-1 px-3 rounded-lg font-semibold bg-Secondary-1 cursor-pointer z-10>
        </form>
    </div>
</div>