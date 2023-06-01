@extends('layouts.main')

<div class="flex">
    @include('admin.sidebar.sidebar')
    <div class="m-8 ml-44">
        <form class="w-full grid grid-cols-2 gap-2">
            <p>Judul</p>
            <input type="text" id="judul" name="judul" placeholder="Judul" required class="border rounded p-1 w-full">
            <p>Isi</p>
            <textarea type="text" id="isi" name="isi" placeholder="Isi" required class="border rounded p-1 w-full"></textarea>
            <p>Date</p>
            <input type="date" id="date" name="date" required class="border rounded p-1 w-full">
            <input type="submit" value="Submit" class="border p-1 px-3 rounded-lg font-semibold bg-Secondary-1 cursor-pointer z-10>
        </form>
    </div>
</div>