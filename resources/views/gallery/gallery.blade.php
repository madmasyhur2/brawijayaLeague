@extends('layouts.main')
@include('navbar.navbar')
<div class="main-tittle bg-[url(/public/assets/tittle-bg.svg)] h-[20vh] bg-no-repeat bg-cover">
    <h1 class="pt-[30px] pl-[10%] text-[#FAFAFA] font-bold text-5xl font-['Montserrat']">HIGHLIGHTS</h1>
</div>

<div class="content m-20 ml-[10%] grid grid-cols-3">
    <div class="border rounded-md border-[#E5E5E5] items-center m-1" style="background-color: #00529C">
        <img class="w-max" src="../assets/landingpage/gal-1.png">
    </div>
    

    {{-- @foreach ($highlights as $highlight)
    <div class="border rounded-md border-[#E5E5E5] items-center m-1" style="background-color: #00529C">
        <img class="w-max" src="{{ asset('storage/' . $pertandingan->image) }}">
    </div>
    @endforeach --}}

</div>


@include('footer.footer')