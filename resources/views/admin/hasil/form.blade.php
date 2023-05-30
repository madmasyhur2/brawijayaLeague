@extends('layouts.main')

<div class="flex">
    @include('admin.sidebar.sidebar')
    <div class="m-8 mr-0">
        <form class="w-full grid grid-cols-2 gap-2">
            <p>Nama Tim A</p>
            <input type="text" id="timA" name="timA" placeholder="Nama Tim A" required class="border rounded p-1 w-full">
            <p>Skor Tim A</p>
            <input type="number" id="skorA" name="skorA" placeholder="Skor Tim A" class="border rounded p-1 w-full">
            <p>Nama Tim B</p>
            <input type="text" id="timB" name="timB" placeholder="Nama Tim B" required class="border rounded p-1 w-full">
            <p>Skor Tim B</p>
            <input type="number" id="skorB" name="skorB" placeholder="Skor Tim B" class="border rounded p-1 w-full">
            <p>Matchday</p>
            <input type="number" id="matchday" name="matchday" placeholder="Matchday" required class="border rounded p-1 w-full">
            <input type="submit" value="Submit" class="border p-1 px-3 rounded-lg font-semibold bg-Secondary-1 cursor-pointer z-10>
        </form>
    </div>
</div>