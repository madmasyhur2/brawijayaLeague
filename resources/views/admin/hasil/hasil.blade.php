@extends('layouts.main')

<div class="flex">
    @include('admin.sidebar.sidebar')
    <div class="m-8 ml-44">
        <a href="/admin/fixtures/form" class="border p-1 px-3 rounded-lg font-semibold bg-Secondary-1">+ Add</a>
        <table class=" mt-4">
            <tr class="text-Secondary-1 font-bold">
                <th class="p-3 bg-[#006DCB] rounded-[6px_0_0_0]">Nama Tim A</th>
                <th class="p-3 bg-[#006DCB]">Skor Tim A</th>
                <th class="p-3 bg-[#006DCB]">Nama Tim B</th>
                <th class="p-3 bg-[#006DCB]">Skor Tim B</th>
                <th class="p-3 bg-[#006DCB]">Matchday</th>
                <th class="p-3 bg-[#006DCB] rounded-[0_6px_0_0]">Operation</th>
            </tr>
            @foreach ($hasil_pertandingans  as $h)
            <tr class="border border-[#E5E5E5]">
                <td class="p-1 text-center font-bold text-l">{{ $h->home_name}}</td>
                <td class="p-1 text-center font-bold text-l">{{ $h->skor_home}}</td>
                <td class="p-1 text-center font-bold text-l">{{ $h->away_name}}</td>
                <td class="p-1 text-center font-bold text-l">{{ $h->skor_away}}</td>
                <td class="p-1 text-center font-bold text-l">{{ $h->matchday}}</td>
                <td class="p-1 text-center font-bold text-l flex gap-1">
                    <a href="{{url('/admin/fixtures/update/'.$h->id)}}" class="border p-1 rounded-lg font-normal bg-Secondary-1">Update</a>
                    <a href="{{url('/admin/fixtures/delete/'.$h->id)}}" class="border p-1 rounded-lg font-normal bg-red">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>