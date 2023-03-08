<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChambreController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ClientController;


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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/chambres/create', [ChambreController::class, 'create'])->name('chambres.create');
    Route::put('/chambres/{chambre}', 'App\Http\Controllers\ChambreController@update')->name('chambres.update');
    Route::get('/chambres/{id}/edit', [ChambreController::class, 'edit'])->name('chambres.edit');

    Route::delete('/chambres/{chambre}', [ChambreController::class, 'destroy'])->name('chambres.destroy');
    Route::post('/chambres', [ChambreController::class, 'store'])->name('chambres.store');
    Route::resource('reservations', ReservationController::class)->only('index');

});

Route::resource('chambres', ChambreController::class)->only('index','show');
Route::resource('hotel', HotelController::class)->only('index');
Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');

Route::delete('/reservations/{reservation}', [ReservationController::class, 'destroy'])->name('reservations.destroy');

Route::post('/reservations/{id}', [ReservationsController::class,'update'])->name('reservations.update');
Route::get('/reservations/{id}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');




require __DIR__.'/auth.php';
