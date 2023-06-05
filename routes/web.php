<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TimController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HasilPertandinganController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PertandinganController;
use App\Http\Controllers\NewsController;

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
Route::get('/teams', [TimController::class, 'index']);
Route::get('/news', [NewsController::class, 'index']);
Route::get('/article', [NewsController::class, 'showDetail']);

Route::get('/admin/fixtures', [TimController::class, 'showFixturesAdmin']);
Route::get('/admin/fixtures/form', [TimController::class, 'teamlist']);

Route::get('/admin/standings', [TimController::class, 'showNameTimAdmin']);
Route::get('/admin/standings/form', [TimController::class, 'StandingForm']);
Route::post('/admin/standings/form/insert', [TimController::class, 'StandingsInsert']);
Route::get('/admin/standings/delete/{tims:id}', [TimController::class, 'StandingsDelete']);
Route::get('/admin/standings/update/{tims:id}', [TimController::class, 'StandingsEdit']);
Route::post('/admin/standings/update/{tims:id}', [TimController::class, 'StandingsUpdate']);

Route::get('/admin/news', [PostController::class, 'showNewsAdmin']);
Route::get('/admin/news/form', [PostController::class, 'NewsForm']);
Route::post('/admin/news/form/insert', [PostController::class, 'NewsInsert']);
Route::get('/admin/news/delete/{posts:id}', [PostController::class, 'NewsDelete']);
Route::get('/admin/news/update/{posts:id}', [PostController::class, 'NewsEdit']);
Route::post('/admin/news/update/{posts:id}', [PostController::class, 'NewsUpdate']);

Route::get('/admin/schedule', [PertandinganController::class, 'showScheduleAdmin']);
Route::get('/admin/schedule/form', [TimController::class, 'dropDown', PertandinganController::class, 'ScheduleForm']);
Route::post('/admin/schedule/form/insert', [PertandinganController::class, 'ScheduleInsert']);
Route::get('/admin/schedule/delete/{posts:id}', [PertandinganController::class, 'ScheduleDelete']);
Route::get('/admin/schedule/update/{posts:id}', [PertandinganController::class, 'ScheduleEdit']);
Route::post('/admin/schedule/update/{posts:id}', [PertandinganController::class, 'ScheduleUpdate']);
Route::get('/admin/fixtures', [HasilPertandinganController::class, 'showFixturesAdmin']);
Route::get('/admin/fixtures/form', [TimController::class, 'dropDownhasil', HasilPertandinganController::class, 'FixturesForm']);
Route::post('/admin/fixtures/form/insert', [HasilPertandinganController::class, 'FixturesInsert']);
Route::get('/admin/fixtures/delete/{hasil_pertandingans:id}', [HasilPertandinganController::class, 'FixturesDelete']);
Route::get('/admin/fixtures/update/{hasil_pertandingans:id}', [HasilPertandinganController::class, 'FixturesEdit']);
Route::post('/admin/fixtures/update/{hasil_pertandingans:id}', [HasilPertandinganController::class, 'FixturesUpdate']);



Route::get('/login', function() {
    return view('login.login');
});
Route::get('/players', function() {
    return view('players.players');
});
Route::get('/statistic', function() {
    return view('statistic.statistic');
});Route::get('/videos', function() {
    return view('videos.videos');
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