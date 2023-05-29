@extends('layouts.main')
@include('navbar.navbar')
{{-- @include('main-tittle-bg.tittle') --}}

<div class="main-tittle bg-[url(/public/assets/tittle-bg.svg)] h-[20vh] bg-no-repeat bg-cover">
    <h1 class="pt-[30px] pl-[10%] text-[#FAFAFA] font-bold text-[60px] font-['Montserrat']">STANDINGS</h1>
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

        {{-- @foreach ($standings as $standing)
        <tr class="border border-[#E5E5E5]">
            <td class="w-[6%] p-1 text-center font-bold text-l">{{ $standing->pos }}</td>
            <td class="w-1/3 p-1 font-bold text-l flex gap-3 items-center">
                <img class="m-0.5 h-9" src="{{ asset('storage/' . $standing->image) }}">
                <p class="">{{ $standing->name }}</p>
            </td>
            <td class="w-[6%] p-1 text-center font-bold text-l">{{ $standing->pts }}</td>
            <td class="w-[6%] p-1 text-center font-bold text-l">{{ $standing->g }}</td>
            <td class="w-[6%] p-1 text-center font-bold text-l">{{ $standing->w }}</td>
            <td class="w-[6%] p-1 text-center font-bold text-l">{{ $standing->d }}</td>
            <td class="w-[6%] p-1 text-center font-bold text-l">{{ $standing->l }}</td>
            <td class="w-[6%] p-1 text-center font-bold text-l">{{ $standing->gf }}</td>
            <td class="w-[6%] p-1 text-center font-bold text-l">{{ $standing->ga }}</td>
            <td class="w-[6%] p-1 text-center font-bold text-l">{{ $standing->gd }}</td>
        </tr>
        @endforeach --}}

        <tr class="border border-[#E5E5E5]">
            <td class="w-[6%] p-1 text-center font-bold text-l"></td>
            <td class="w-1/3 p-1 font-bold text-l flex gap-3 items-center">
                <img class="m-0.5 h-9">
                <p class=""></p>
            </td>
            <td class="w-[6%] p-1 text-center font-bold text-l"></td>
            <td class="w-[6%] p-1 text-center font-bold text-l"></td>
            <td class="w-[6%] p-1 text-center font-bold text-l"></td>
            <td class="w-[6%] p-1 text-center font-bold text-l"></td>
            <td class="w-[6%] p-1 text-center font-bold text-l"></td>
            <td class="w-[6%] p-1 text-center font-bold text-l"></td>
            <td class="w-[6%] p-1 text-center font-bold text-l"></td>
            <td class="w-[6%] p-1 text-center font-bold text-l"></td>
        </tr>


    </table>
</div>

@include('footer.footer')

