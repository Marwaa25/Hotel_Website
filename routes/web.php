<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChambreController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;


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

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//     Route::get('/chambres/create', [ChambreController::class, 'create'])->name('chambres.create');
//     Route::put('/chambres/{chambre}', 'App\Http\Controllers\ChambreController@update')->name('chambres.update');
//     Route::get('/chambres/{id}/edit', [ChambreController::class, 'edit'])->name('chambres.edit');
//     Route::delete('/chambres/{chambre}', [ChambreController::class, 'destroy'])->name('chambres.destroy');
//     Route::post('/chambres', [ChambreController::class, 'store'])->name('chambres.store');

//     Route::resource('reservations', ReservationController::class)->only('index');
//     Route::delete('/reservations/{reservation}', [ReservationController::class, 'destroy'])->name('reservations.destroy');
//     Route::post('/reservations/{id}', [ReservationController::class,'update'])->name('reservations.update');
//     Route::get('/reservations/{id}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');


// });

Route::resource('hotel', HotelController::class)->only('index');

// Route::resource('chambres', ChambreController::class)->only('index','show');
// Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
// Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
// Route::get('/services', [ServicesController::class, 'index'])->name('services.index');

// Route::get('/services/{service}', [ServicesController::class, 'show'])->name('services.show');
// Route::get('/services/{service}/edit', [ServicesController::class, 'edit'])->name('services.edit');
// Route::put('/services/{service}', [ServicesController::class, 'update'])->name('services.update');
// Route::delete('/services/{service}', [ServicesController::class, 'destroy'])->name('services.destroy');
// Route::get('/services/create', [ServicesController::class, 'create'])->name('services.create');
// Route::post('/services', [ServicesController::class, 'store'])->name('services.store');



Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
Route::get('/comments/create', [CommentController::class, 'create'])->name('comments.create');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comments/{comment}', [CommentController::class, 'show'])->name('comments.show');
Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

Route::get('/contact',[ContactController::class,'create'])->name('contact.contact');
Route::post('/contact',[ContactController::class,'store'])->name('contact.contact');



Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    // Routes pour les réservations
    Route::get('/admin/reservations', [AdminController::class, 'listReservations'])->name('admin.reservations');
    Route::get('/admin/reservations/create', [AdminController::class, 'createReservation'])->name('admin.reservations.create');
    Route::get('/admin/reservations/{reservation}', [AdminController::class, 'showReservation'])->name('admin.reservations.show');
    Route::get('/admin/reservations/{reservation}/edit', [AdminController::class, 'editReservation'])->name('admin.reservations.edit');
    Route::put('/admin/reservations/{reservation}', [AdminController::class, 'updateReservation'])->name('admin.reservations.update');
    Route::delete('/admin/reservations/{reservation}', [AdminController::class, 'destroyReservation'])->name('admin.reservations.destroy');

    // Routes pour les chambres
    Route::get('/admin/chambres', [AdminController::class, 'listChambres'])->name('admin.chambres');
    Route::get('/admin/chambres/create', [AdminController::class, 'createChambre'])->name('admin.chambres.create');
    Route::post('/admin/chambres', [AdminController::class, 'storeChambre'])->name('admin.chambres.store');
    Route::get('/admin/chambres/{chambre}', [AdminController::class, 'showChambre'])->name('admin.chambres.show');
    Route::get('/admin/chambres/{chambre}/edit', [AdminController::class, 'editChambre'])->name('admin.chambres.edit');
    Route::put('/admin/chambres/{chambre}', [AdminController::class, 'updateChambre'])->name('admin.chambres.update');
    Route::delete('/admin/chambres/{chambre}', [AdminController::class, 'destroyChambre'])->name('admin.chambres.destroy');

    // Routes pour les services
    Route::get('/admin/services', [AdminController::class, 'listServices'])->name('admin.services');
    Route::get('/admin/services/create', [AdminController::class, 'createService'])->name('services.create');
    Route::post('/admin/services', [AdminController::class, 'storeService'])->name('admin.services.store');
    Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');
    Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('/admin/services/{service}', [AdminController::class, 'update'])->name('services.update');
    Route::delete('/admin/services/{service}', [AdminController::class, 'destroy'])->name('services.destroy');
});

require __DIR__.'/auth.php';
