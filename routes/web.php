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

    Route::get('/products/update/{id}', 'update')->name('product_update');
    Route::post('/products/update/{id}', 'updatePost')->name('product_update_post');

    Route::get('/products/delete/{id}', 'destroy')->name('product_delete');
    Route::delete('/products/delete/{id}', 'destroyPost')->name('product_delete');
});

Route::middleware(['admin'])->controller(AdminController::class)->group( function() {

    Route::get('/admin', 'index')->name('admin');

    Route::get('/admin/waiting/products', 'show_waiting_products')->name('admin_waiting_products');
    Route::get('/admin/waiting/works', 'show_waiting_works')->name('admin_waiting_works');

    Route::get('/admin/products/active', 'show_products_active')->name('admin_products_active');
    Route::get('/admin/products/active/update', 'update_products_active')->name('admin_update_products_active');
    Route::get('/admin/products/sold', 'show_products_sold')->name('admin_products_sold');
    Route::get('/admin/products/active/update/{id}', 'update_products_active')->name('admin_products_active_update');
    Route::post('/admin/products/active/update/{id}', 'update_products_activePost')->name('admin_products_active_update_post');
    Route::get('/admin/products/active/delete/{id}', 'delete_products_active')->name('admin_products_active_delete');
    Route::delete('/admin/products/active/delete/{id}', 'delete_products_activePost')->name('admin_products_active_delete_post');

    Route::get('/admin/works/active', 'show_works_active')->name('admin_works_active');
    Route::get('/admin/works/old', 'show_works_old')->name('admin_works_old');

    Route::get('/admin/users', 'show_users')->name('admin_users');
    Route::get('/admin/users/update/{id}', 'update_users')->name('admin_users_update');
    Route::post('/admin/users/update/{id}', 'update_usersPost')->name('admin_users_update_post');
    Route::get('/admin/users/delete/{id}', 'delete_users')->name('admin_users_delete');
    Route::delete('/admin/users/delete/{id}', 'delete_usersPost')->name('admin_users_delete_post');


    Route::get('/admin/orders', 'show_orders')->name('admin_orders');

});


Route::controller(WorkController::class)->group(function(){

Route::get('/work','index')->name('work');
Route::get('/work/create','create')->name('add_work');
Route::get('/work/{id}','accept')->name('accept_work');
Route::post('/work/{id}','acceptPost')->name('accept_work_post');
Route::post('/work/create','createPost')->name('add_work');
});


Route::controller(RatedController::class)->group(function(){

    Route::post('/products/{id}/like', 'create')->name('add_like');
    Route::delete('/products/{id}/dislike', 'delete')->name('delete_like');

});

Route::controller(ProfileController::class)->group(function(){

    Route::get('/profile','show_products')->name('profile');
    Route::get('/profile/edit','update')->name('profile_update');
    Route::post('/profile/edit','updatePost')->name('profile_update_post');

    Route::get('/profile/sold','show_sold')->name('profile_sold');
    Route::get('/profile/rated','show_rated')->name('profile_rated');
    Route::get('/profile/orders','show_orders')->name('profile_orders');

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
