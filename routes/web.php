<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SocietieController;
use App\Http\Controllers\Admin\ScheduleCrudController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PlanController;
use App\Models\Societie;

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

Route::get('/societies/premiums', function () {

    return view('societies.index');
})->name('societiesPremiums.index');

Route::get('/societie/{societie}/show', [SocietieController::class, 'show'])->name('societie.show');

/*
|--------------------------------------------------------------------------
| Review
|--------------------------------------------------------------------------
*/

Route::post('/review/create', [ReviewController::class, 'store'])->name('review.store');
Route::put('/review/{review}', [ReviewController::class, 'update'])->name('review.update');
Route::delete('/review/{review}', [ReviewController::class, 'destroy'])->name('review.destroy');


/*
|--------------------------------------------------------------------------
| OAuth 2.0
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'loginWithGoogle'])->name('login');
Route::get('/test', [AuthController::class, 'loginCallback']);



/*
|--------------------------------------------------------------------------
| Mail
|--------------------------------------------------------------------------
*/

Route::post('/mail/{societie}', [MailController::class, 'sendMail'])->name("mail");

/*
|--------------------------------------------------------------------------
| Contact
|--------------------------------------------------------------------------
*/

Route::get('/contact', [ContactController::class, 'index'])->name("contact");
Route::post('/contact', [MailController::class, 'sendMail'])->name("sendMail");

/*
|--------------------------------------------------------------------------
| Plans
|--------------------------------------------------------------------------
*/
Route::get('/plans', [PlanController::class, 'index'])->name("plan");

Route::get('/plans/contact/{plan}', [PlanController::class, 'contact'])->name("plan.contact");
Route::post('/plans/contact/{plan}', [MailController::class, 'sendMail'])->name("plan.contact");
