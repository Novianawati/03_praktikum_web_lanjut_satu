<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\programcontroller;
use App\Http\Controllers\contactuscontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

*/

Route::get('/home', function () {
    return view('home');
});

Route::prefix('category')->group(function () {
    Route::get('/', function () {
        return view('product');
    });
    Route::get('/marbel-edu-games', [CategoryController::class, 'marbel']);
    Route::get('/marbel-and-friends-kids-games', [CategoryController::class, 'marbelandfriends']);
    Route::get('/riri-story-books', [CategoryController::class, 'riri']);
    Route::get('/kolak-kids-songs', [CategoryController::class, 'kolak']);
    Route::get('/kabi-islamic-books', [CategoryController::class, 'kabi']);
    Route::get('/marbel-junior', [CategoryController::class, 'marbeljunior']);
    Route::get('/keong-casual-games', [CategoryController::class, 'keonggames']);
});

Route::get('/news/{judul}', function () {
    return view('news', ['judul' => 'covid19']);
});

Route::prefix('program')->group(function () {
    Route::get('/', function () {
        return view('program');
    });
    Route::get('/karir', [ProgramController::class, 'Karir']);
    Route::get('/magang', [ProgramController::class, 'Magang']);
    Route::get('/kunjungan-indistri', [ProgramController::class, 'KunjunganIndustri']);
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::resource('contact-us', ContactUsController::class);