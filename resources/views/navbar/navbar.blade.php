@extends('layouts.main')

<header class="navbar h-[10vh] bg-[#0A3E70] flex justify-between">
    <a href="/" class="w-32 m-4"><img src="../assets/logo-header.svg" class="m-[10px_20px]"></a>
    <div class="navbar flex gap-[40px] m-[0_20px]">
        <a href="/" class="flex justify-center items-center">HOME</a>
        <div class="navbar-dropdown">
            <div class="navbar-dropdown-text">
                <p>GAMES</p>
                <img src="../assets/Vector-V.svg">
            </div>
            <div class="dropdown-content">
                <a href="/schedules">SCHEDULES</a>
                <a href="/standings">STANDINGS</a>
            </div>
        </div>
        <a href="/teams">TEAMS</a>
        <a href="/highlights">HIGHLIGHTS</a>
        <a href="/gallery">GALLERY</a>
        <a href="/news">NEWS</a>
        <a href="/about">ABOUT US</a>
        {{-- <a href="/signUp/index.html" class="navbar-sign-up"><p>Sign Up</p></a> --}}
        {{-- <a href="/login" class="navbar-login"><p>Log In</p></a> --}}
    </div>
</header>