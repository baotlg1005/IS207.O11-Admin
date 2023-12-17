<?php

use Illuminate\Support\Facades\Route;

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//FLIGHT
Route::get('/flight/create', [App\Http\Controllers\FlightController::class, 'create'])->name('flight.create');
Route::post('/flight', [App\Http\Controllers\FlightController::class, 'store'])->name('flight.store');

Route::get('/flight', [App\Http\Controllers\FlightController::class, 'index'])->name('flight.index');
Route::get('/flight/search', [App\Http\Controllers\FlightController::class, 'search'])->name('flight.search');
Route::get('/flight/{id}', [App\Http\Controllers\FlightController::class, 'show'])->name('flight.show');

Route::get('/flight/{id}/edit', [App\Http\Controllers\FlightController::class, 'edit'])->name('flight.edit');
Route::put('/flight/{id}', [App\Http\Controllers\FlightController::class, 'update'])->name('flight.update');

Route::delete('/flight/{id}', [App\Http\Controllers\FlightController::class, 'destroy'])->name('flight.destroy');

//BUS
Route::get('/bus/create', [App\Http\Controllers\BusController::class, 'create'])->name('bus.create');
Route::post('/bus', [App\Http\Controllers\BusController::class, 'store'])->name('bus.store');

Route::get('/bus', [App\Http\Controllers\BusController::class, 'index'])->name('bus.index');
Route::get('/bus/search', [App\Http\Controllers\BusController::class, 'search'])->name('bus.search');
Route::get('/bus/{id}', [App\Http\Controllers\BusController::class, 'show'])->name('bus.show');

Route::get('/bus/{id}/edit', [App\Http\Controllers\BusController::class, 'edit'])->name('bus.edit');
Route::put('/bus/{id}', [App\Http\Controllers\BusController::class, 'update'])->name('bus.update');

Route::delete('/bus/{id}', [App\Http\Controllers\BusController::class, 'destroy'])->name('bus.destroy');

//TAXI
Route::get('/taxi/create', [App\Http\Controllers\TaxiController::class, 'create'])->name('taxi.create');
Route::post('/taxi', [App\Http\Controllers\TaxiController::class, 'store'])->name('taxi.store');

Route::get('/taxi', [App\Http\Controllers\TaxiController::class, 'index'])->name('taxi.index');
Route::get('/taxi/search', [App\Http\Controllers\TaxiController::class, 'search'])->name('taxi.search');
Route::get('/taxi/{id}', [App\Http\Controllers\TaxiController::class, 'show'])->name('taxi.show');

Route::get('/taxi/{id}/edit', [App\Http\Controllers\TaxiController::class, 'edit'])->name('taxi.edit');
Route::put('/taxi/{id}', [App\Http\Controllers\TaxiController::class, 'update'])->name('taxi.update');

Route::delete('/taxi/{id}', [App\Http\Controllers\TaxiController::class, 'destroy'])->name('taxi.destroy');

//TAXI AREA
Route::get('/taxiarea/create', [App\Http\Controllers\TaxiAreaController::class, 'create'])->name('taxiarea.create');
Route::post('/taxiarea', [App\Http\Controllers\TaxiAreaController::class, 'store'])->name('taxiarea.store');

Route::get('/taxiarea', [App\Http\Controllers\TaxiAreaController::class, 'index'])->name('taxiarea.index');
Route::get('/taxiarea/search', [App\Http\Controllers\TaxiAreaController::class, 'search'])->name('taxiarea.search');
Route::get('/taxiarea/{id}', [App\Http\Controllers\TaxiAreaController::class, 'show'])->name('taxiarea.show');

Route::get('/taxiarea/{id}/edit', [App\Http\Controllers\TaxiAreaController::class, 'edit'])->name('taxiarea.edit');
Route::put('/taxiarea/{id}', [App\Http\Controllers\TaxiAreaController::class, 'update'])->name('taxiarea.update');

Route::delete('/taxiarea/{id}', [App\Http\Controllers\TaxiAreaController::class, 'destroy'])->name('taxiarea.destroy');

//HOTEL
Route::get('/hotel/create', [App\Http\Controllers\HotelController::class, 'create'])->name('hotel.create');
Route::post('/hotel', [App\Http\Controllers\HotelController::class, 'store'])->name('hotel.store');

Route::get('/hotel', [App\Http\Controllers\HotelController::class, 'index'])->name('hotel.index');
Route::get('/hotel/search', [App\Http\Controllers\HotelController::class, 'search'])->name('hotel.search');
Route::get('/hotel/{id}', [App\Http\Controllers\HotelController::class, 'show'])->name('hotel.show');

Route::get('/hotel/{id}/edit', [App\Http\Controllers\HotelController::class, 'edit'])->name('hotel.edit');
Route::put('/hotel/{id}', [App\Http\Controllers\HotelController::class, 'update'])->name('hotel.update');

Route::delete('/hotel/{id}', [App\Http\Controllers\HotelController::class, 'destroy'])->name('hotel.destroy');

//ROOM
Route::get('/room/create', [App\Http\Controllers\RoomController::class, 'create'])->name('room.create');
Route::post('/room', [App\Http\Controllers\RoomController::class, 'store'])->name('room.store');

Route::get('/room', [App\Http\Controllers\RoomController::class, 'index'])->name('room.index');
Route::get('/room/search', [App\Http\Controllers\RoomController::class, 'search'])->name('room.search');
Route::get('/room/{id}/searchHotel', [App\Http\Controllers\RoomController::class, 'searchHotel'])->name('room.searchHotel');
Route::get('/room/{id}', [App\Http\Controllers\RoomController::class, 'show'])->name('room.show');

Route::get('/room/{id}/edit', [App\Http\Controllers\RoomController::class, 'edit'])->name('room.edit');
Route::put('/room/{id}', [App\Http\Controllers\RoomController::class, 'update'])->name('room.update');

Route::delete('/room/{id}', [App\Http\Controllers\RoomController::class, 'destroy'])->name('room.destroy');
//INVOICE
Route::get('/invoice', [App\Http\Controllers\InvoiceController::class, 'index'])->name('invoice');