<?php

use App\Http\Controllers\AddressBookController;
use App\Http\Controllers\ContactController;
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


Route::prefix('dashboard')->group(function() {

    // Address book routes 
    Route::prefix('address-book')->group(function(){

        Route::get('/', [AddressBookController::class, 'index']);
        Route::get('/create/{contact_id}', [AddressBookController::class, 'create']);
        Route::post('/create', [AddressBookController::class, 'store']);
        Route::get('/edit/{id}', [AddressBookController::class, 'show']);
        Route::patch('/edit/{id}', [AddressBookController::class, 'update']);
        Route::get('/restore', [AddressBookController::class, 'restore']);
        Route::delete('/delete/{id}', [AddressBookController::class, 'destroy']);
    });

    // Contact routes

    Route::prefix('contacts')->group(function() {
        Route::get('/', [ContactController::class, 'index']);
        Route::get('/create', [ContactController::class, 'create']);
        Route::post('/create', [ContactController::class, 'store']);
        Route::get('/show/{id}', [ContactController::class, 'show']);
        Route::patch('/update/{id}', [ContactController::class, 'update']);
        Route::delete('/delete/{id}', [ContactController::class, 'destroy']);
        Route::get('/restore', [ContactController::class,'show_trashed']);
        Route::patch('/restore/{id}', [ContactController::class, 'restore']);
    });
});
