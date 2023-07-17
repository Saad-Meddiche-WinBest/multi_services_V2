<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocietieController;
use GuzzleHttp\Psr7\Request;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/societies/{id}/show', function () {
//     return view('home');
// })->name('societies.show');

// Route::get('/societies', function (Request $request) {
//     return view('societies.index');
// })->name('societies.index');


Route::get('/societies', function () {
    return view('societies.index');
})->name('societies.index');
