<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminAuthController;

Route::get('/', function () {
    return view('rental.welcome');
})->name('root');

Route::get('/register', function () {
    return view('rental.register');
})->name('register');

Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth.pengguna'], function () {
    Route::get('/home', [RentalController::class, 'showHome'])->name('home');
    Route::get('/truk', [RentalController::class, 'showTruk'])->name('truk');
    Route::get('/contact', [RentalController::class, 'showContact'])->name('contact');
    Route::get('/price', [RentalController::class, 'showPrice'])->name('price');
    Route::get('/welcome', [RentalController::class, 'showLogout']);
    Route::get('/index', [RentalController::class, 'showAdminPage']);

});
Route::resource('bookings', BookingController::class)->except(['show']);
Route::get('/index', [BookingController::class, 'index'])->name('bookings.index');
Route::get('/create', [BookingController::class, 'create'])->name('bookings.create');

Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');