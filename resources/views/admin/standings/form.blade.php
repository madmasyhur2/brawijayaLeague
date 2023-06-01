@extends('layouts.main')

<div class="flex">
    @include('admin.sidebar.sidebar')
    <div class="m-8 ml-44">
        <form class="w-full grid grid-cols-2 gap-2">
            <p>Logo Tim</p>
            <input type="file" id="logo" name="logo" accept="image/*" max="2097152" required class="border rounded p-1 w-full">
            <p>Nama Tim</p>
            <input type="text" id="nama" name="nama" placeholder="Nama Tim" required class="border rounded p-1 w-full">
            <p>Poin</p>
            <input type="number" id="Poin" name="Poin" placeholder="Poin" required class="border rounded p-1 w-full">
            <p>Menang</p>
            <input type="number" id="Menang" name="Menang" placeholder="Menang" required class="border rounded p-1 w-full">
            <p>Seri</p>
            <input type="number" id="Seri" name="Seri" placeholder="Seri" required class="border rounded p-1 w-full">
            <p>Kalah</p>
            <input type="number" id="Kalah" name="Kalah" placeholder="Kalah" required class="border rounded p-1 w-full">
            <p>Gol</p>
            <input type="number" id="KGolalah" name="Gol" placeholder="Gol" required class="border rounded p-1 w-full">
            <p>Kebobolan</p>
            <input type="number" id="Kebobolan" name="Kebobolan" placeholder="Kebobolan" required class="border rounded p-1 w-full">
            <input type="submit" value="Submit" class="border p-1 px-3 rounded-lg font-semibold bg-Secondary-1 cursor-pointer z-10>
        </form>
    </div>
</div>