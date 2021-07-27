<?php

use App\Http\Controllers\AddressBookController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


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
    return view('master');
});


// Auth Routes
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);

// Dashboard Render route.
Route::get('/dashboard', [DashboardController::class, 'index']);

// Address book Routes
Route::prefix('dashboard')->group(function() {

    Route::get('/address-book', [AddressBookController::class, 'index']);
    Route::get('/address-book/create', [AddressBookController::class, 'create']);
    Route::post('/address-book/create', [AddressBookController::class, 'store']);
    Route::get('/address-book/edit/{id}', [AddressBookController::class, 'show']);
    Route::patch('/address-book/edit/{id}', [AddressBookController::class, 'update']);
    Route::get('/address-book/restore', [AddressBookController::class, 'restore']);
    Route::delete('/address-book/delete/{id}', [AddressBookController::class, 'destroy']);

});