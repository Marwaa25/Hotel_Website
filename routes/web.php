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
use App\Http\Controllers\BotManController;

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
})->name('/');






Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    // Routes pour les réservations
    Route::resource('admin/reservations', 'App\Http\Controllers\AdminController');

    Route::get('/admin/reservations', [AdminController::class, 'index'])->name('admin.reservations.index');
    Route::get('/admin/reservations/{reservation}/edit', [AdminController::class, 'editReservation'])->name('admin.reservations.edit');
    Route::post('/admin/reservations/{id}', [AdminController::class, 'updateReservation'])->name('admin.reservations.update');
    Route::delete('/admin/reservations/{reservation}', [AdminController::class, 'destroyReservation'])->name('admin.reservations.destroy');
    
    // Routes pour les chambres
    Route::get('/admin/chambres', [AdminController::class, 'index'])->name('admin.chambres.index');
    Route::get('/admin/chambres/create', [AdminController::class, 'createChambre'])->name('admin.chambres.create');
    Route::post('/chambres', [AdminController::class, 'storeChambre'])->name('admin.chambres.store');
    Route::get('/admin/chambres/{id}', [AdminController::class, 'showChambre'])->name('admin.chambres.show');
    Route::get('/admin/chambres/{id}/edit', [AdminController::class, 'editChambre'])->name('admin.chambres.edit');
    Route::put('/admin/chambres/{id}', [AdminController::class, 'updateChambre'])->name('admin.chambres.update');
    Route::delete('/admin/chambres/{id}', [AdminController::class, 'destroyChambre'])->name('admin.chambres.destroy');
    
    // Routes pour les services
    Route::get('/admin/services', [AdminController::class, 'index'])->name('admin.services.index');

    Route::get('/services/create', [AdminController::class, 'createService'])->name('admin.services.create');
    Route::post('/admin/services', [AdminController::class, 'storeServices'])->name('admin.services.store');
    Route::get('/admin/services/{service}', [AdminController::class, 'showService'])->name('admin.services.show');
    Route::get('/admin/services/{service}/edit', [AdminController::class, 'editService'])->name('admin.services.edit');
    Route::put('/admin/services/{id}', [AdminController::class, 'updateService'])->name('admin.services.update');
    Route::delete('/admin/services/{id}', [AdminController::class, 'destroyService'])->name('admin.services.destroy');

    // Routes pour les commentaires
    Route::get('/admin/comments', [AdminController::class, 'index'])->name('admin.comments.index');
    Route::get('/admin/comments/{id}', [AdminController::class, 'showComment'])->name('admin.comments.show');
    Route::delete('/admin/comments/{id}', [AdminController::class, 'destroyComment'])->name('admin.comments.destroy');

    //Routes pour les personnels
    
    Route::get('/personnels/create', [AdminController::class, 'createPersonnel'])->name('admin.personnels.create');
    Route::post('/personnels', [AdminController::class, 'storePersonnel'])->name('admin.personnels.store');
    Route::get('/personnels/{id}', [AdminController::class, 'showPersonnel'])->name('admin.personnels.show');
    Route::get('/personnels/{id}/edit', [AdminController::class, 'editPersonnel'])->name('admin.personnels.edit');
    Route::put('/personnels/{id}', [AdminController::class, 'updatePersonnel'])->name('admin.personnels.update');
    Route::delete('/personnels/{id}', [AdminController::class, 'destroyPersonnel'])->name('admin.personnels.destroy');
     
    //Routes pour le stock

    Route::get('/stock/create', [AdminController::class, 'createStock'])->name('admin.stock.create');
    Route::post('/stock', [AdminController::class, 'storeStock'])->name('admin.stock.store');
    Route::get('/stock/{id}', [AdminController::class, 'showStock'])->name('admin.stock.show');
    Route::get('/stock/{id}/edit', [AdminController::class, 'editStock'])->name('admin.stock.edit');
    Route::put('/stock/{id}', [AdminController::class, 'updateStock'])->name('admin.stock.update');
    Route::delete('/stock/{id}', [AdminController::class, 'destroyStock'])->name('admin.stock.destroy');
    
    
    
});

Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
Route::get('/services/{service}', [ServicesController::class, 'show'])->name('services.show');
Route::resource('hotel', HotelController::class)->only('index');

Route::resource('chambres', ChambreController::class)->only('index','show');
Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
Route::get('/comments/create', [CommentController::class, 'create'])->name('comments.create');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comments/{comment}', [CommentController::class, 'show'])->name('comments.show');
// Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
// Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

Route::get('/contact',[ContactController::class,'create'])->name('contact.contact');
Route::post('/contact',[ContactController::class,'store'])->name('contact.contact');

Route::get('/languageConverter/{locale}',function($locale){
	if(in_array($locale,['fr','ar','en']))
	{
		session()->put("locale",$locale);
	}
	return redirect()->back();				
})->name('languageConverter');  

Route::match(['get', 'post'], 'botman', [BotManController::class, 'handle']);

require __DIR__.'/auth.php';
