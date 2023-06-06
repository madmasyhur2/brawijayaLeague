@extends('layouts.main')
@include('navbar.navbar')

<div class="login">
    <div class="login-left">
        <img src="../assets/Logo with text.svg">
    </div>
    <div class="login-right">
        <div class="login-right-content">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <h1>WELCOME !</h1>
                <p>EMAIL</p>
                <input type="email" name="email" id="email" placeholder="Input your email" required>
                <p>PASSWORD</p>
                <input type="password" name="password" id="password" placeholder="Input your password" required>
                <div class="login-remember">
                    <div class="remember-me">
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <p>Remember me</p>
                    </div>
                </div>
                <button type="submit">Masuk</button>
            </form>
            <p class="dont-have">Don’t have an account? <a href="/signUp/index.html">Sign Up</a></p>
        </div>
    </div>
</div>