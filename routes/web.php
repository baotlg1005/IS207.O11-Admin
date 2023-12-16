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
//INVOICE
Route::get('/invoice', [App\Http\Controllers\InvoiceController::class, 'index'])->name('invoice');