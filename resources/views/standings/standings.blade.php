@extends('layouts.main')
@include('navbar.navbar')
{{-- @include('main-tittle-bg.tittle') --}}

<div class="main-tittle bg-[url(/public/assets/tittle-bg.svg)] h-[20vh] bg-no-repeat bg-cover">
    <h1 class="pt-[30px] pl-[10%] text-[#FAFAFA] font-bold text-5xl font-['Montserrat']">STANDINGS</h1>
</div>

<div class="content m-[90px_10%] mb-14">
    <table class="w-full rounded-[6px]">
        <tr class=" text-[#F79940] font-bold text-l">
            <th class="p-3 bg-[#006DCB] rounded-[6px_0_0_0]">POS</th>
            <th class="p-3 bg-[#006DCB]">CLUB</th>
            <th class="p-3 bg-[#006DCB]">PTS</th>
            <th class="p-3 bg-[#006DCB]">G</th>
            <th class="p-3 bg-[#006DCB]">W</th>
            <th class="p-3 bg-[#006DCB]">D</th>
            <th class="p-3 bg-[#006DCB]">L</th>
            <th class="p-3 bg-[#006DCB]">GF</th>
            <th class="p-3 bg-[#006DCB]">GA</th>
            <th class="p-3 bg-[#006DCB] rounded-[0_6px_0_0]">GD</th>
        </tr>

        @php($i = 1)
        @foreach ($tim as $t)
            <tr class="border border-[#E5E5E5]">
                <td class="w-[6%] p-1 text-center font-bold text-l">{{ $i++ }}</td>
                <td class="w-1/3 p-1 font-bold text-l flex gap-3 items-center">
                    <img class="m-0.5 h-9" src="{{'../assets/landingpage/'.$t->logo_tim}}">
                    <p class="">{{ $t->nama_tim }}</p>
                </td>
                <td class="w-[6%] p-1 text-center font-bold text-l">{{ $t->getPoin() }}</td>
                <td class="w-[6%] p-1 text-center font-bold text-l">{{ $t->game}}</td>
                <td class="w-[6%] p-1 text-center font-bold text-l">{{ $t->menang}}</td>
                <td class="w-[6%] p-1 text-center font-bold text-l">{{ $t->seri}}</td>
                <td class="w-[6%] p-1 text-center font-bold text-l">{{ $t->kalah}}</td>
                <td class="w-[6%] p-1 text-center font-bold text-l">{{ $t->gol}}</td>
                <td class="w-[6%] p-1 text-center font-bold text-l">{{ $t->kebobolan}}</td>
                <td class="w-[6%] p-1 text-center font-bold text-l">{{ $t->gd}}</td>
            </tr>
        @endforeach
    </table>
</div>

@include('footer.footer')

