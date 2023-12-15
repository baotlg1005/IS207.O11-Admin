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

//INVOICE
Route::get('/invoice', [App\Http\Controllers\InvoiceController::class, 'index'])->name('invoice');