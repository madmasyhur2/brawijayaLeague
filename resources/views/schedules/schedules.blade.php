@extends('layouts.main')
@include('navbar.navbar')
<div class="main-tittle bg-[url(/public/assets/tittle-bg.svg)] h-[20vh] bg-no-repeat bg-cover">
    <h1 class="pt-[30px] pl-[10%] text-[#FAFAFA] font-bold text-5xl font-['Montserrat']">SCHEDULES</h1>
</div>

<form class="pl-[10%] mt-9 flex items-center" method="GET">
    <input type="text" placeholder="Search" class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" name="category" />
    <button type="submit" class="ml-2 px-4 py-2 text-Neutral-white rounded-md border bg-Text-color font-bold hover:bg-Secondary-1">
        Search
    </button>
</form>

<div class="board">
    @foreach ($pertandingans as $ps)
    <div class="boardvalue">
        <div class="boardvalue-date s14">
            <p>MATCHDAY {{ $ps->matchday }}</p>
            <p>{{ $ps->tanggal }}</p>
        </div>
        <div class="boardvalue-tim s32">
            <div class="tim s20">
                <p>{{ $ps->home_name }}</p>
                <img class="m-2" src="{{'../storage/teamLogo/'.$ps->home_logo}}" alt="">
            </div>
            <p>VS</p>
            <div class="tim2 s20">
                <img class="m-2" src="{{'../storage/teamLogo/'.$ps->away_logo}}" alt="">
                <p>{{ $ps->away_name }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>


@include('footer.footer')