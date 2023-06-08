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

Route::get('/store', [StoreController::class, 'index'])->name('store.index');

Route::get('/login', [StoreController::class, 'login'])->name('login.index');

Route::get('/', function () {
    return view('index');
})->name('home');

