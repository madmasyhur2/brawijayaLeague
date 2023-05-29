@extends('layouts.main')
@include('navbar.navbar')

<div class="main-tittle bg-[url(/public/assets/tittle-bg.svg)] h-[20vh] bg-no-repeat bg-cover">
    <h1 class="pt-[30px] pl-[10%] text-[#FAFAFA] font-bold text-[60px] font-['Montserrat']">TEAMS</h1>
</div>
<div class="content m-20 ml-[10%] grid grid-cols-3">
    <div class="box border rounded-md border-[#E5E5E5] flex p-4 items-center m-1">
        <img class="h-16" src="../assets/landingpage/gal-1.png">
        <h2 class=" text-xl font-['Roboto'] font-medium ml-4">INTER</h2>
    </div>

    {{-- @foreach ($TimSeeder as $team)
    <div class="box border rounded-md border-[#E5E5E5] flex p-4 items-center m-1">
        <img class="h-16" src="{{ asset('storage/' . $team->image) }}">
        <h2 class=" text-xl font-['Roboto'] font-medium ml-4">{{ $team->name }}</h2>
    </div>
    @endforeach --}}

</div>

@include('footer.footer')