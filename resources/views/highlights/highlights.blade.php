@extends('layouts.main')
@include('navbar.navbar')
<div class="main-tittle bg-[url(/public/assets/tittle-bg.svg)] h-[20vh] bg-no-repeat bg-cover">
    <h1 class="pt-[30px] pl-[10%] text-[#FAFAFA] font-bold text-5xl font-['Montserrat']">HIGHLIGHTS</h1>
</div>

<div class="content m-20 ml-[10%] grid grid-cols-3">
    <div class="border rounded-md border-[#E5E5E5] items-center m-1 font-['Roboto'] font-bold" style="background-color: #00529C">
        <img class="w-max" src="../assets/landingpage/gal-1.png">
        <div class="flex m-4 mt-2 mb-0 justify-between text-xl">
            <h2 class="text-white m-0">Liver</h2>
            <h2 class="text-[#F79940]">2</h2>
        </div>
        <div class="flex m-4 mt-0 mb-0 justify-between text-xl">
            <h2 class="text-white">Liver</h2>
            <h2 class="text-[#F79940]">2</h2>
        </div>
        <p class="text-white font-medium text-sm text-right m-2">MATCHDAY 3</p>
        <div class="linedown" style="background-color: #006DCB; height: 5px; border-radius: 0 0 6px 6px"></div>
    </div>
    

    {{-- @foreach ($highlights as $highlight)
    <div class="border rounded-md border-[#E5E5E5] items-center m-1 font-['Roboto'] font-bold" style="background-color: #00529C">
        <img class="w-max" src="{{ asset('storage/' . $pertandingan->image) }}">
        <div class="flex m-4 mt-2 mb-0 justify-between text-xl">
            <h2 class="text-white m-0">{{ $pertandingan->tim1 }}</h2>
            <h2 class="text-[#F79940]">{{ $pertandingan->skor1 }}</h2>
        </div>
        <div class="flex m-4 mt-0 mb-0 justify-between text-xl">
            <h2 class="text-white">{{ $pertandingan->tim2 }}</h2>
            <h2 class="text-[#F79940]">{{ $pertandingan->skor2 }}</h2>
        </div>
        <p class="text-white font-medium text-sm text-right m-2">MATCHDAY {{ $pertandingan->day }}</p>
        <div class="linedown" style="background-color: #006DCB; height: 5px; border-radius: 0 0 6px 6px"></div>
    </div>
    @endforeach --}}

</div>


@include('footer.footer')