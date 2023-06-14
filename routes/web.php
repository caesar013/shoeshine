<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\TransactionController;
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


Route::get('/article', [HomeController::class, 'article'])->name('article');
Route::get('/article/{id}', [HomeController::class, 'showArticle']);

Route::get('/service', [ServiceController::class, 'showService'])->name('service.showService');

Route::get('/gallery', [HomeController::class, 'showGallery'])->name('gallery');

Route::get('/', fn()=>redirect()->route('guest.home'));


Route::middleware('auth')->prefix('dashboard')->name('dashboard.')->group(function(){

    Route::resource('/order', OrderController::class);

    Route::resource('/shoe', ShoeController::class);

    Route::resource('/transaction', TransactionController::class);

    Route::get('/service', [ServiceController::class, 'index'])->name('service.display');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::middleware('isAdmin')->prefix('admin')->name('admin.')->group(function(){

        Route::resource('/service', ServiceController::class);

    });
});



Route::middleware('guest')->prefix('home')->name('guest.')->group(function(){

    Route::get('/', [HomeController::class, 'showGuestIndex'])->name('home'); // localhost/home


    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');

    Route::post('/login', [LoginController::class, 'login'])->name('login');

    Route::post('/register', [RegisterController::class, 'register'])->name('register');

    Route::get('/logout', function(){
        abort(403, 'You are Unauthenticated');
    })->name('logout');

});
//Ini masih diluar middleware tolong tambahin ke grouping route yang pas
Route::get('/testimoni',[HomeController::class, 'showTestimoni'])->name('testimoni');
// we'll later utilize except option on the resource route in order to exculde the unauthorized action.
