@extends('layouts.main')

<div class="flex">
    @include('admin.sidebar.sidebar')
    <div class="m-8 ml-44">
        <form action="/admin/fixtures/form/insert" class="w-full grid grid-cols-2 gap-2" method="post" enctype="multipart/form-data">
            @csrf
            <p>Pertandingan ID</p>
            <select type="text" id="pertandinganID" name="pertandinganID" placeholder="pertandinganID" required class="border rounded p-1 w-full">
                <option selected>-- Pilih Pertandingan ID --</option>
                @foreach ($pertandingans as $p)
                    <option>{{$p->id}}</option>
                @endforeach
            </select>
            <p>Skor Tim Home</p>
            <input type="number" id="skorHome" name="skorHome" placeholder="Skor Tim Home" class="border rounded p-1 w-full">
            <p>Skor Tim Away</p>
            <input type="number" id="skorAway" name="skorAway" placeholder="Skor Tim Away   " class="border rounded p-1 w-full">
            <input type="submit" value="Submit" class="border p-1 px-3 rounded-lg font-semibold bg-Secondary-1 cursor-pointer z-10">
        </form>
        <table class=" mt-4">
            <tr class="text-Secondary-1 font-bold">
                <th class="p-3 bg-[#006DCB] rounded-[6px_0_0_0]">Nama Tim Home</th>
                <th class="p-3 bg-[#006DCB]">Nama Tim Away</th>
                <th class="p-3 bg-[#006DCB]">Matchday</th>
                <th class="p-3 bg-[#006DCB]">Tanggal</th>
                <th class="p-3 bg-[#006DCB] rounded-[0_6px_0_0]">Pertandingan ID</th>
            </tr>
            @foreach ($pertandingans as $h)
            <tr class="border border-[#E5E5E5]">
                <td class="p-1 text-center font-bold text-l">{{ $h->home_name}}</td>
                <td class="p-1 text-center font-bold text-l">{{ $h->away_name}}</td>
                <td class="p-1 text-center font-bold text-l">{{ $h->matchday}}</td>
                <td class="p-1 text-center font-bold text-l">{{ $h->tanggal}}</td>
                <td class="p-1 text-center font-bold text-l">{{ $h->id}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>