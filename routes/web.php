<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TimController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HasilPertandinganController;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// bikin controller sesuai halaman

Route::get('/', [DashboardController::class, 'index']);
Route::get('/standings', [TimController::class, 'index']);
Route::get('/admin/schedule/form', [TimController::class, 'dropDown']);
Route::get('/admin/fixtures/form', [TimController::class, 'teamlist']);
Route::get('/admin/standings', [TimController::class, 'showNameTimAdmin']);

Route::get('/teams', [TimController::class, 'showNameTim']);

Route::get('/login', function() {
    return view('login.login');
});
Route::get('/schedules', function() {
    return view('schedules.schedules');
});
Route::get('/players', function() {
    return view('players.players');
});
Route::get('/statistic', function() {
    return view('statistic.statistic');
});Route::get('/videos', function() {
    return view('videos.videos');
});
Route::get('/news', function() {
    return view('news.news');
});
Route::get('/about', function() {
    return view('about.about');
});
Route::get('/highlights', function() {
    return view('highlights.highlights');
});
Route::get('/gallery', function() {
    return view('gallery.gallery');
});
Route::get('/admin', function() {
    return view('admin.admin');
});
Route::get('/admin/fixtures', function() {
    return view('admin.hasil.hasil');
});
Route::get('/admin/fixtures/edit', function() {
    return view('hasil.form.edit');
});
Route::get('/admin/standings/form', function() {
    return view('admin.standings.form');
});
Route::get('/admin/standings/edit', function() {
    return view('standings.form.edit');
});
Route::get('/admin/schedule', function() {
    return view('admin.pertandingan.pertandingan');
});
Route::get('/admin/schedule/edit', function() {
    return view('pertandingan.form.edit');
});
Route::get('/admin/news', function() {
    return view('admin.news.news');
});
Route::get('/admin/news/form', function() {
    return view('admin.news.form');
});
Route::get('/admin/news/edit', function() {
    return view('news.form.edit');
});