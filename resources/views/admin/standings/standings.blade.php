@extends('layouts.main')

<div class="flex">
    @include('admin.sidebar.sidebar')
    <div class="m-8 mr-0">
        <a href="/admin/standings/form" class="border p-1 px-3 rounded-lg font-semibold bg-Secondary-1">+ Add</a>
<table class=" mt-4">
    <tr class="text-Secondary-1 font-bold">
        <th class="p-3 bg-[#006DCB] rounded-[6px_0_0_0]">POS</th>
        <th class="p-3 bg-[#006DCB]">CLUB</th>
        <th class="p-3 bg-[#006DCB]">PTS</th>
        <th class="p-3 bg-[#006DCB]">G</th>
        <th class="p-3 bg-[#006DCB]">W</th>
        <th class="p-3 bg-[#006DCB]">D</th>
        <th class="p-3 bg-[#006DCB]">L</th>
        <th class="p-3 bg-[#006DCB]">GF</th>
        <th class="p-3 bg-[#006DCB]">GA</th>
        <th class="p-3 bg-[#006DCB]">GD</th>
        <th class="p-3 bg-[#006DCB] rounded-[0_6px_0_0]">Operation</th>
    </tr>
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
        <td class="w-[6%] p-1 text-center font-bold text-l flex gap-1">
            <a class="border p-1 rounded-lg font-normal bg-Secondary-1">Update</a>
            <a class="border p-1 rounded-lg font-normal bg-red">Delete</a>
        </td>
    </tr>
</table>
    </div>
</div>