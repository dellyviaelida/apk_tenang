<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ZikirController;
use App\Http\Controllers\RegistController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MeditationController;
use App\Http\Controllers\QuoteAdminController;
use App\Http\Controllers\ZikirAdminController;
use App\Http\Controllers\JournalUserController;
use App\Http\Controllers\CategoryAdminController;
use App\Http\Controllers\MeditationAdminController;


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

Route::get('/', [QuoteController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/registration', [RegistController::class, 'index'])->middleware('guest');

Route::post('/registration', [RegistController::class, 'store']);

Route::get('/therapy-meditation', [CategoryController::class, 'index']);

Route::get('/categories/{category}', [CategoryController::class, 'show']);

Route::get('/detail-meditation/{meditation}', [MeditationController::class, 'show']);

Route::get('/therapy-zikir', [ZikirController::class, 'index']);

Route::get('/guide', function () {
    return view('guide', [
        "title" => "Guide"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile"
    ]);
})->middleware('auth');

Route::put('/profile', [RegistController::class, 'update'])->middleware('auth');

Route::get('/edit-journal', function () {
    return view('edit-journal', [
        "title" => "Edit Journal"
    ]);
});

Route::get('/test', function () {
    return view('test', [
        "title" => "Tes Kesehatan Mental"
    ]);
});

Route::post('/test', [TestController::class, 'process']);

Route::get('/detail-category', [MeditationController::class, 'show']);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/data-journal', [JournalController::class, 'index']);

Route::get('/input-data', function () {
    return view('admin.input-data');
});

Route::resource('/journal', JournalUserController::class)->middleware('auth');

Route::resource('/quote', QuoteAdminController::class);

Route::resource('/zikir', ZikirAdminController::class);

Route::resource('/meditation', MeditationAdminController::class);

Route::resource('/category', CategoryAdminController::class);