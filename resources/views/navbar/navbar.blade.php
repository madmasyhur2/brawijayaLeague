@extends('layouts.main')

<header class="navbar h-[10vh] bg-[#0A3E70] flex justify-between">
    <img src="../assets/logo-header.svg" class="m-[10px_20px]">
    <div class="navbar flex gap-[40px] m-[0_20px]">
        <a href="/" class="flex justify-center items-center">HOME</a>
        <div class="navbar-dropdown">
            <div class="navbar-dropdown-text">
                <p>GAMES</p>
                <img src="../assets/Vector-V.svg">
            </div>
            <div class="dropdown-content">
                <a href="">SCHEDULES</a>
                <a href="/standings">STANDINGS</a>
            </div>
        </div>
        <div class="navbar-dropdown">
            <div class="navbar-dropdown-text">
                <p>PROFILE</p>
                <img src="../assets/Vector-V.svg">
            </div>
            <div class="dropdown-content">
                <a href="#">TEAMS</a>
                <a href="#">PLAYERS</a>
            </div>
        </div>
        <a href="">STATISTIC</a>
        <a href="">VIDEOS</a>
        <a href="">NEWS</a>
        <a href="">ABOUT US</a>
        {{-- <a href="/signUp/index.html" class="navbar-sign-up"><p>Sign Up</p></a> --}}
        <a href="/login" class="navbar-login"><p>Log In</p></a>
    </div>
</header>