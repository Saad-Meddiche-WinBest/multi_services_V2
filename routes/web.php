<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SocietieController;

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

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Societie
|--------------------------------------------------------------------------
*/
Route::get('/societies', function () {

    return view('societies.index');
})->name('societies.index');

Route::get('/societies/byCity/{citie}', function () {

    return view('societies.index');
})->name('societiesByCitie.index');

Route::get('/societies/byCategory/{categorie}', function () {

    return view('societies.index');
})->name('societiesByCategory.index');

Route::get('/societie/{societie}/show', [SocietieController::class, 'show'])->name('societie.show');

/*
|--------------------------------------------------------------------------
| Review
|--------------------------------------------------------------------------
*/

Route::post('/review/create', [ReviewController::class, 'store'])->name('review.store');
Route::put('/review/{review}', [ReviewController::class, 'update'])->name('review.update');
Route::delete('/review/{review}', [ReviewController::class, 'destroy'])->name('review.destroy');
