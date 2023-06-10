<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\TransactionController;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/logout', function(){
    abort(403);
});

Route::middleware('auth')->group(function(){

    Route::resource('/order', OrderController::class);

    Route::resource('/shoe', ShoeController::class);

    Route::resource('/transaction', TransactionController::class);

    Route::get('/service', [ServiceController::class, 'index'])->name('service.index');

    Route::middleware('isAdmin')->group(function(){

        Route::resource('/service', ServiceController::class);

    });
});

Route::get('/', function(){
    return redirect()->route('login')->with('title', 'Login');
});

// we'll later utilize except option on the resource route in order to exculde the unauthorized action.

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/article', [HomeController::class, 'article'])->name('article');

Route::get('/service', [ServiceController::class, 'index'])->name('service.index');

Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
