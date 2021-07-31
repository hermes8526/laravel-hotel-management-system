<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\RoleController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\People\WholeSalerController;
use App\Http\Controllers\People\AgentController;
use App\Http\Controllers\People\StaffController;
use App\Http\Controllers\People\CustomerController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Hotel\HotelController;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('/');

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

    Route::resource('people/wholeSaler', WholeSalerController::class);
    Route::resource('people/agent', AgentController::class);
    Route::resource('people/staff', StaffController::class);
    Route::resource('people/customer', CustomerController::class);
    Route::post('/people/wholeSaler/getWholeSalers', [WholeSalerController::class, 'getWholeSalers'])->name('getWholeSalers');
    Route::post('/people/agent/getAgents', [AgentController::class, 'getAgents'])->name('getAgents');
    Route::post('/people/staff/getStaffs', [StaffController::class, 'getStaffs'])->name('getStaffs');
    Route::post('/people/customer/getCustomers', [CustomerController::class, 'getCustomers'])->name('getCustomers');

    Route::resource('booking', BookingController::class);
    Route::post('/booking/getBookings', [BookingController::class, 'getBookings'])->name('getBookings');

    Route::resource('hotel/hotel', HotelController::class);
    Route::post('/hotel/hotel/getHotels', [HotelController::class, 'getHotels'])->name('getHotels');

    Route::resource('hotel/facility', HotelController::class);
    Route::post('/hotel/facility/getHotels', [HotelController::class, 'getHotels'])->name('getHotels');

    Route::resource('hotel/roomType', HotelController::class);
    Route::post('/hotel/roomType/getHotels', [HotelController::class, 'getHotels'])->name('getHotels');

    Route::resource('report', HotelController::class);
    Route::post('/report/getHotels', [HotelController::class, 'getHotels'])->name('getHotels');

});

Route::get('/home/list', [HomeController::class, 'list'])->name('home.list');
Route::get('/home/single', [HomeController::class, 'single'])->name('home.single');
Route::get('/home/cart', [HomeController::class, 'cart'])->name('home.cart');
Route::get('/home/book', [HomeController::class, 'book'])->name('home.book');

Route::get('/home/getHotels', [HomeController::class, 'getHotels'])->name('home.getHotels');


