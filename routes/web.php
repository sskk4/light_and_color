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

Route::get('/store', [StoreController::class, 'index'])->name('store');



Route::get('/', function () {
    return view('index');
})->name('home');




Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'registerPost')->name('register');

});
