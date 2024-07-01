<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontController::class, 'index'])->name('front');
Route::get('/show/{id}', [FrontController::class, 'show'])->name('show');
Route::get('/search', [FrontController::class, 'search'])->name('front.search');

Auth::routes(['register' => false, 'reset' => false]);

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
    Route::resource('kategori', KategoriController::class);
    Route::resource('film', FilmController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
