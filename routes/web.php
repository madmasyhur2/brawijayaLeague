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
Route::get('/about', [DashboardController::class, 'indexabout']);
Route::get('/standings', [TimController::class, 'index']);
Route::get('/schedules', [PertandinganController::class, 'index']);
Route::get('/schedules', [PertandinganController::class, 'search'])->name('search');
Route::get('/teams', [TimController::class, 'indexteams']);
Route::get('/news', [PostController::class, 'index']);
Route::get('/news/{post:id}', [PostController::class, 'showDetail']);
Route::get('/highlights', [HasilPertandinganController::class, 'index']);
Route::get('/gallery', [HasilPertandinganController::class, 'showGambar']);
// Route::get('/admin', [HasilPertandinganController::class, 'showGambar']);

Route::prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::post('/', [AdminController::class, 'login'])->name('login');
    Route::middleware(['auth'])->group(function() {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [AdminController::class, 'logout']);
    
        Route::get('/fixtures', [TimController::class, 'showFixturesAdmin']);
        Route::get('/fixtures/form', [TimController::class, 'teamlist']);
    
        Route::get('/standings', [TimController::class, 'showNameTimAdmin']);
        Route::get('/standings/form', [TimController::class, 'StandingForm']);
        Route::post('/standings/form/insert', [TimController::class, 'StandingsInsert']);
        Route::get('/standings/delete/{tims:id}', [TimController::class, 'StandingsDelete']);
        Route::get('/standings/update/{tims:id}', [TimController::class, 'StandingsEdit']);
        Route::post('/standings/update/{tims:id}', [TimController::class, 'StandingsUpdate']);
    
        Route::get('/news', [PostController::class, 'showNewsAdmin']);
        Route::get('/news/form', [PostController::class, 'NewsForm']);
        Route::post('/news/form/insert', [PostController::class, 'NewsInsert']);
        Route::get('/news/delete/{posts:id}', [PostController::class, 'NewsDelete']);
        Route::get('/news/update/{posts:id}', [PostController::class, 'NewsEdit']);
        Route::post('/news/update/{posts:id}', [PostController::class, 'NewsUpdate']);
    
        Route::get('/schedule', [PertandinganController::class, 'showScheduleAdmin']);
        Route::get('/schedule/form', [TimController::class, 'dropDown']);
        Route::post('/schedule/form/insert', [PertandinganController::class, 'ScheduleInsert']);
        Route::get('/schedule/delete/{posts:id}', [PertandinganController::class, 'ScheduleDelete']);
        Route::get('/schedule/update/{posts:id}', [PertandinganController::class, 'ScheduleEdit']);
        Route::post('/schedule/update/{posts:id}', [PertandinganController::class, 'ScheduleUpdate']);
        Route::get('/fixtures', [HasilPertandinganController::class, 'showFixturesAdmin']);
        Route::get('/fixtures/form', [TimController::class, 'dropDownhasil']);
        Route::post('/fixtures/form/insert', [HasilPertandinganController::class, 'FixturesInsert']);
        Route::get('/fixtures/delete/{hasil_pertandingans:id}', [HasilPertandinganController::class, 'FixturesDelete']);
        Route::get('/fixtures/update/{hasil_pertandingans:id}', [HasilPertandinganController::class, 'FixturesEdit']);
        Route::post('/fixtures/update/{hasil_pertandingans:id}', [HasilPertandinganController::class, 'FixturesUpdate']);
    });
});

Route::get('storage/{filename}', function ($filename){
    $path = storage_path('storage/teamLogo' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});



// Route::get('/login', function() {
//     return view('login.login');
// });
// Route::get('/admin', function() {
//     return view('admin.admin');
// });