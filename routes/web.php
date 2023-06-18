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

use App\Http\Controllers\MarketController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RatedController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WorkController;

Route::controller(MarketController::class)->group(function() {

    Route::get('/products/old','show_old')->name('old_products');
    Route::get('/products/create','create')->name('add_product');
    Route::get('/products','index')->name('products');
    Route::get('/products/{id}', 'show')->name('product');
    Route::post('/products/create','createPost')->name('add_product');
    Route::get('/products/buy/{id}','buy')->name('buy_product');
    Route::post('/products/buy/{id}','buyPost')->name('buy_product');

});

Route::controller(AdminController::class)->group(function() {

    Route::get('/admin', 'index')->name('admin_panel');

});


Route::controller(WorkController::class)->group(function(){

Route::get('/work','index')->name('work');
Route::get('/work/create','create')->name('add_work');
Route::post('/work/create','createPost')->name('add_work');
});


Route::controller(RatedController::class)->group(function(){

    Route::post('/products/{id}/like', 'create')->name('add_like');
    Route::delete('/products/{id}/dislike', 'delete')->name('delete_like');

});

Route::controller(ProfileController::class)->group(function(){

    Route::get('/profile','show_products')->name('profile');
    Route::get('/profile/edit','update')->name('profile_update');
    Route::get('/profile/sold','show_sold')->name('profile_sold');
    Route::get('/profile/rated','show_rated')->name('profile_rated');

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
