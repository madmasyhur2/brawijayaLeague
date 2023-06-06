@extends('layouts.main')
@include('navbar.navbar')
<div class="main-tittle bg-[url(/public/assets/tittle-bg.svg)] h-[20vh] bg-no-repeat bg-cover">
    <h1 class="pt-[30px] pl-[10%] text-[#FAFAFA] font-bold text-5xl font-['Montserrat']">HIGHLIGHTS</h1>
</div>

<div class="content m-20 ml-[10%] grid grid-cols-4">
    @foreach ($hasilPertandingan as $hp)
    <div class="border rounded-md border-[#E5E5E5] items-center m-1 font-['Roboto'] font-bold" style="background-color: #00529C">
        <img class="w-max" src="{{'../storage/highlight/'.$hp->gambar}}">
        <div class="flex m-4 mt-2 mb-0 justify-between text-xl">
            <h2 class="text-Neutral-white m-0">{{$hp->home_name}}</h2>
            <h2 class="text-[#F79940]">{{$hp->skor_home}}</h2>
        </div>
        <div class="flex m-4 mt-0 mb-0 justify-between text-xl">
            <h2 class="text-Neutral-white">{{$hp->away_name}}</h2>
            <h2 class="text-[#F79940]">{{$hp->skor_away}}</h2>
        </div>
        <p class="text-Neutral-white font-medium text-sm text-right m-2">MATCHDAY {{$hp->matchday}}</p>
        <div class="linedown" style="background-color: #006DCB; height: 5px; border-radius: 0 0 6px 6px"></div>
    </div>
    @endforeach
</div>


@include('footer.footer')