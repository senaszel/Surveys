<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\OpinionFormingUsersController;
use App\Http\Controllers\SurveysController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['page' => 'home']);
});

Route::get('/dashboard', function () {
    return view('dashboard', ['page' => 'dashboard']);
})->middleware(['auth'])->name('dashboard');

Route::get('/opiniotworczy-uzytkownicy',[OpinionFormingUsersController::class,'index'])->name('opiniotworczy-uzytkownicy');

Route::controller(SurveysController::class)->middleware('web')->prefix('surveys')->name('surveys.')->group( function () {
    Route::get('/index','index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/ostatnio-dodane-index','ostatnio_dodane_index')->name('ostatnio-dodane-index');
    Route::get('/najpopularniejsze-index','najpopularniejsze_index')->name('najpopularniejsze-index');
});

require __DIR__ . '/auth.php';
