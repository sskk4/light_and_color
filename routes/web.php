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

use App\Http\Controllers\StoreController;
use App\Http\Controllers\AuthController;


Route::controller(StoreController::class)->group(function() {
    Route::get('/store','index')->name('store');
    Route::get('/product/{id}', 'show')->name('product');
});




Route::get('/', function () {
    return view('index');
})->name('home');




Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'loginPost')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'registerPost')->name('register');
    Route::get('/logout', 'logout')->name('logout');
});
