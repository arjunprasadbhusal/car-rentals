<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\bookmarkcontroller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\VehicleController;
use App\Models\Bookings;
use Illuminate\Support\Facades\Route;
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/Cars',[PageController::class,'Cars'])->name('Cars');


Route::get('/About',[PageController::class,'About'])->name('About');
Route::get('/about',[PageController::class,'News'])->name('News');
Route::get('/contact',[PageController::class,'Contact'])->name('Contact');
Route::get('/messages', [ContactController::class, 'index'])->name('messages.index');
Route::post('/contact/store', [ContactController::class, 'store'])->name('messages.store');


Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth','isadmin')->name('dashboard');
Route::middleware('auth')->group(function(){
Route::post('bookmark/store',[bookmarkcontroller::class,'store'])->name('bookmarks.store');
Route::get('mybookmark',[bookmarkcontroller::class,'mybookmark'])->name('mybookmark');
Route::delete('boookmark/destroy',[bookmarkcontroller::class,'destroy'])->name('bookmarks.destroy');
Route::get('checkout/{id}',[bookmarkcontroller::class,'checkout'])->name('checkout');



Route::post('/review/store', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/review', [ReviewController::class, 'index'])->name('reviews.index');
Route::delete('/review/{id}/destroy', [ReviewController::class, 'destroy'])->name('reviews.destroy');


Route::get('/userprofile/edit', [UserProfileController::class, 'edit'])->name('userprofile.edit');
Route::post('/userprofile/update', [UserProfileController::class, 'update'])->name('userprofile.update');

Route::get('/history', [BookingController::class, 'userHistory'])->name('historyindex');
Route::post('/bookings/{bookingid}/cancel', [BookingController::class, 'cancel'])->name('bookings.cancel');



Route::post('bookings/store',[BookingController::class,'store'])->name('bookings.store');
Route::get('/bookings',[BookingController::class,'index'])->name('bookings.index');
Route::get('/bookings/{id}/{status}',[BookingController::class,'status'])->name('bookings.status');
Route::get('bookings/{bookmarkid}/storeEsewa',[BookingController::class,'storeEsewa'])->name('bookings.storeEsewa');

});
Route::get('/vehicle',[VehicleController::class,'index'])->name('vehicle.index');
Route::get('/vehicle/create',[VehicleController::class,'create'])->name('vehicle.create');
Route::get('/vehicle/{id}/edit',[VehicleController::class,'edit'])->name('vehicle.edit');
Route::post('/vehicle/{id}/update',[VehicleController::class,'update'])->name('vehicle.update');
Route::get('/vehicle/{id}/destroy',[VehicleController::class,'destroy'])->name('vehicle.destroy');
Route::post('/vehicle/store',[VehicleController::class,'store'])->name('vehicle.store');

Route::get('/viewvehicle/{id}',[PageController::class,'viewvehicle'])->name('viewvehicle');
Route::get('/search', [PageController::class, 'search'])->name('search');

Route::get('/users', [UserController::class, 'index'])->name('users.index');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

   
});

require __DIR__.'/auth.php';
