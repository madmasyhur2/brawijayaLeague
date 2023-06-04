@extends('layouts.main')

<div class="flex">
    @include('admin.sidebar.sidebar')
    <div class="m-8 ml-44">
        <a href="/admin/news/form" class="border p-1 px-3 rounded-lg font-semibold bg-Secondary-1">+ Add</a>
        <table class=" mt-4">
            <tr class="text-Secondary-1 font-bold">
                <th class="p-3 bg-[#006DCB] rounded-[6px_0_0_0]">Judul</th>
                <th class="p-3 bg-[#006DCB]">Gambar</th>
                <th class="p-3 bg-[#006DCB]">Tanggal</th>
                <th class="p-3 bg-[#006DCB]">Isi</th>
                <th class="p-3 bg-[#006DCB] rounded-[0_6px_0_0]">Operation</th>
            </tr>
            @foreach ($pos as $p)
            <tr class="border border-[#E5E5E5]">
                <td class="p-1 text-left text-l">{{ $p->judul }}</td>
                <td class="p-1 text-center text-l"><img src="{{ '../assets/news/'.$p->gambar_berita }}" class="m-0.5 h-9"></td>
                <td class="p-1 text-center text-l">{{ $p->tgl_publikasi }}</td>
                <td class="p-1 text-justify text-l">{{ $p->isi }}</td>
                <td class="p-1 text-center text-l flex gap-1">
                    <a href="{{url('/admin/news/update/'.$p->id)}}" class="border p-1 rounded-lg font-normal bg-Secondary-1">Update</a>
                    <a href="{{url('/admin/news/delete/'.$p->id)}}" class="border p-1 rounded-lg font-normal bg-red">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>