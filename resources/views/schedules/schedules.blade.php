@extends('layouts.main')
@include('navbar.navbar')
<div class="main-tittle bg-[url(/public/assets/tittle-bg.svg)] h-[20vh] bg-no-repeat bg-cover">
    <h1 class="pt-[30px] pl-[10%] text-[#FAFAFA] font-bold text-5xl font-['Montserrat']">SCHEDULES</h1>
</div>
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
                <img class="m-2" src="{{'../assets/landingpage/logotim.svg'.$ps->home_logo}}" alt="">
            </div>
            <p>VS</p>
            <div class="tim2 s20">
                <img class="m-2" src="{{'../assets/landingpage/logotim.svg'.$ps->away_logo}}" alt="">
                <p>{{ $ps->away_name }}</p>
            </div>
        </div>
    </div>
    @endforeach

    {{-- @foreach ($pertandingans as $pertandingan)
    <div class="boardvalue">
        <div class="boardvalue-date s14">
            <p>{{ $pertandingan->day }}</p>
            <p>{{ $pertandingan->time }}</p>
        </div>
        <div class="boardvalue-tim s32">
            <div class="tim s20">
                <p>{{ $pertandingan->tim1 }}</p>
                <img class="m-2" src="{{ asset('storage/' . $pertandingan->imagetim1) }}" alt="">
            </div>
            <p>VS</p>
            <div class="tim2 s20">
                <img class="m-2" src="{{ asset('storage/' . $pertandingan->imagetim2) }}" alt="">
                <p>{{ $pertandingan->tim2 }}</p>
            </div>
        </div>
    </div>
    @endforeach --}}
</div>


@include('footer.footer')