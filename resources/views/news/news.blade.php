@extends('layouts.main')
@include('navbar.navbar')

<div class="main-tittle bg-[url(/public/assets/tittle-bg.svg)] h-[20vh] bg-no-repeat bg-cover">
    <h1 class="pt-[30px] pl-[10%] text-[#FAFAFA] font-bold text-5xl font-['Montserrat']">NEWS</h1>
</div>

<div class=" m-[10%] mb-14 line2 grid grid-cols-3 gap-[25px] mt-14">
    <div class="line2-column1 bg-[#FFFFFF] border border-solid border-[#E5E5E5] rounded-md h-[270px] relative">
        <div class="image relative overflow-hidden rounded-[6px_6px_0_0]">
            <img src="../assets/landingpage/baner1.png" class="w-full h-fit transform-gpu transition-transform duration-300 ease-out hover:scale-125">
        </div>
        <h2 class="font-bold text-[20px] text-[#0A0A0A] m-4 mt-2 font-['Roboto']">LOREM IPSUM DOLOR SIT AMET</h2>
        <p class="absolute bottom-3 left-4 font-['Roboto'] text-[#737373] text-[14px] font-medium">20 Mei 2023</p>
    </div>

    {{-- @foreach ($post as $news)
    <div class="line2-column1 bg-[#FFFFFF] border border-solid border-[#E5E5E5] rounded-md h-[270px] relative">
        <div class="image relative overflow-hidden rounded-[6px_6px_0_0]">
            <img src="{{ asset('storage/' . $news->image) }}" class="w-full h-fit transform-gpu transition-transform duration-300 ease-out hover:scale-125">
        </div>
        <h2 class="font-bold text-[20px] text-[#0A0A0A] m-4 mt-2 font-['Roboto']">{{ $news->tittle }}</h2>
        <p class="absolute bottom-3 left-4 font-['Roboto'] text-[#737373] text-[14px] font-medium">{{ $tittle->date }}</p>
    </div>
    @endforeach --}}



</div>


@include('footer.footer')