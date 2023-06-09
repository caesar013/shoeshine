<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\TransactionController;
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
    Route::middleware('isAdmin')->group(function(){

    });
});
Route::get('/', function(){
    return redirect()->route('login')->with('title', 'Login');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/order', OrderController::class);

Route::resource('/service', ServiceController::class);

Route::resource('/shoe', ShoeController::class);

Route::resource('/transaction', TransactionController::class);
