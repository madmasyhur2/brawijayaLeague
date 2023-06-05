@extends('layouts.main')
@include('navbar.navbar')

<div class="main-tittle bg-[url(/public/assets/tittle-bg.svg)] h-[20vh] bg-no-repeat bg-cover">
    <h1 class="pt-[30px] pl-[10%] text-[#FAFAFA] font-bold text-5xl font-['Montserrat']">NEWS</h1>
</div>

<div class=" m-[10%] mb-14 line2 grid grid-cols-3 gap-[25px] mt-14">

    @foreach ($post as $p)
    <div class="line2-column1 bg-[#FFFFFF] border border-solid border-[#E5E5E5] rounded-md h-[300px] relative">
        <div class="image overflow-hidden rounded-[6px_6px_0_0]">
            <img src="{{ '../assets/news/'.$p->gambar_berita }}" class="object-fill w-full h-fit transform-gpu transition-transform duration-300 ease-out hover:scale-125" alt="gambar-news">
            <div class="line2-column1 bg-[#FFFFFF] rounded-b-lg h-[140px] absolute bottom-0">
                <h2 class="font-bold text-[20px] text-[#0A0A0A] m-4 mt-2 font-['Roboto']">{{ Str::words($p->judul, 7) }}</h2>
                <p class="absolute bottom-11 left-4 font-['Roboto'] text-[#0A0A0A] text-[14px] font-regular">{{ Str::words($p->isi, 7) }}</p>
                <p class="absolute bottom-3 left-4 font-['Roboto'] text-[#737373] text-[14px] font-medium">{{ $p->created_at->format('Y-m-d') }}</p>
            </div>
        </div >
    </div>
    @endforeach

</div>


@include('footer.footer')