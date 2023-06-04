@extends('layouts.main')

<div class="flex">
    @include('admin.sidebar.sidebar')
    <div class="m-8 ml-44">
        <form action="/admin/schedule/form/update/{{$pertandingan->id}}" class="w-full grid grid-cols-2 gap-2" method="post" enctype="multipart/form-data">
            @csrf
            <p>Nama Tim A</p>
            <select type="text" id="timA" name="timA" placeholder="Nama Tim A" required class="border rounded p-1 w-full">
                <option selected>None</option>
                @foreach ($tim as $t)
                    <option>{{ $t->nama_tim}}</option>
                @endforeach
            </select>
            <p>Nama Tim B</p>
            <select type="text" id="timB" name="timB" placeholder="Nama Tim B" required class="border rounded p-1 w-full">
                <option selected>None</option>
                @foreach ($tim as $t)
                    <option>{{ $t->nama_tim}}</option>
                @endforeach
            </select>
            <p>Matchday</p>
            <input value="{{ $pertandingan->matchday}}" type="number" id="matchday" name="matchday" placeholder="Matchday" required class="border rounded p-1 w-full">
            <p>Date</p>
            <input type="date" id="date" name="date" required class="border rounded p-1 w-full">
            <input type="submit" value="Submit" class="border p-1 px-3 rounded-lg font-semibold bg-Secondary-1 cursor-pointer z-10>
        </form>
    </div>
</div>