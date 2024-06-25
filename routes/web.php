<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Auth::routes(
    // ['register' => false]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route user
Route::group(['prefix' => 'admin'], function(){
    Route::resource('user', UserController::class);
});

// route admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('brand', BrandController::class);
    Route::resource('product', ProductController::class);
});
Route::get('/test', function(){
    return view('layouts.app');
});
