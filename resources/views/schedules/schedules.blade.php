@extends('layouts.main')
@include('navbar.navbar')
<div class="main-tittle bg-[url(/public/assets/tittle-bg.svg)] h-[20vh] bg-no-repeat bg-cover">
    <h1 class="pt-[30px] pl-[10%] text-[#FAFAFA] font-bold text-5xl font-['Montserrat']">SCHEDULES</h1>
</div>

<div class="board">
    <div class="boardvalue">
        <div class="boardvalue-date s14">
            <p>MATCHDAY 3</p>
            <p>27 MEI 2023 - 14:00</p>
        </div>
        <div class="boardvalue-tim s32">
            <div class="tim s20">
                <p>LIVERPOLL</p>
                <img class="m-2" src="../assets/landingpage/logotim.svg" alt="">
            </div>
            <p>VS</p>
            <div class="tim2 s20">
                <img class="m-2" src="../assets/landingpage/logotim.svg" alt="">
                <p>MANCHASTER UNITED</p>
            </div>
        </div>
    </div>

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