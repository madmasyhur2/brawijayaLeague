@extends('layouts.main')

<div class="flex">
    @include('admin.sidebar.sidebar')
    <div class="m-8 ml-44">
        <form action="/admin/fixtures/form/insert" class="w-full grid grid-cols-2 gap-2" method="post" enctype="multipart/form-data">
            @csrf
            <p>Pertandingan</p>
            <select type="text" id="timA" name="timA" placeholder="Nama Tim A" required class="border rounded p-1 w-full">
                <option selected>-- Pilih Pertandingan --</option>
                @foreach ($tim as $t)
                    <option>{{ $t->nama_tim}}</option>
                @endforeach
            </select>
            <p>Skor Tim Home</p>
            <input type="number" id="skorA" name="skorA" placeholder="Skor Tim A" class="border rounded p-1 w-full">
            <p>Skor Tim Away</p>
            <input type="number" id="skorB" name="skorB" placeholder="Skor Tim B" class="border rounded p-1 w-full">
            <input type="submit" value="Submit" class="border p-1 px-3 rounded-lg font-semibold bg-Secondary-1 cursor-pointer z-10>
        </form>
    </div>
</div>