<?php

use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminShoeController;
use App\Http\Controllers\AdminTransactionController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\TransactionController;
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


Route::get('/article', [GuestController::class, 'article'])->name('article');

Route::get('/article/{id}', [GuestController::class, 'showArticle'])->name('showArticle');

Route::get('/service', [GuestController::class, 'showService'])->name('service.showServices');

Route::get('/testimony', [GuestController::class, 'showTestimony'])->name('testimony');

Route::get('/', fn () => redirect()->route('guest.home'));


Route::middleware('auth')->prefix('dashboard')->name('dashboard.')->group(function () {

    Route::get('/order', [OrderController::class, 'create'])->name('order.create');

    Route::post('/order', [OrderController::class, 'store'])->name('order.store');

    Route::resource('/shoe', ShoeController::class)->except(['create', 'show']);

    Route::get('/shoes/data', [ShoeController::class, 'fetchData'])->name('fetchDataShoes');

    Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');

    Route::get('/transaction/data', [TransactionController::class, 'fetchData'])->name('fetchDataTransactions');

    Route::get('/transaction/orderData/{order_id}', [TransactionController::class, 'showOrder'])->name('transaction.showOrder');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::resource('/profile', UserController::class)->except(['show', 'store', 'index', 'create', 'destroy']);

    Route::middleware('isAdmin')->prefix('admin')->name('admin.')->group(function () {

        Route::get('/home', [HomeController::class, 'showAdminIndex'])->name('home');

        Route::get('/service/data', [AdminServiceController::class, 'fetchData'])->name('fetchDataServices');

        Route::get('/order/data', [AdminOrderController::class, 'fetchData'])->name('fetchDataOrders');

        Route::get('/shoe/data', [AdminShoeController::class, 'fetchData'])->name('fetchDataShoes');

        Route::get('/transaction/data', [AdminTransactionController::class, 'fetchData'])->name('fetchDataTransactions');

        Route::resource('/service', AdminServiceController::class);

        Route::resource('/shoe', AdminShoeController::class);

        Route::get('/order', [AdminOrderController::class, 'create'])->name('order.create');

        Route::post('/order', [AdminOrderController::class, 'store'])->name('order.store');

        Route::post('/order/fetchShoes', [AdminOrderController::class, 'fetchShoes'])->name('order.fetchShoes');

        Route::resource('/transaction', AdminTransactionController::class);

    });
});



Route::middleware('guest')->prefix('home')->name('guest.')->group(function () {

    Route::get('/', [GuestController::class, 'index'])->name('home'); // localhost/home


    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');

    Route::post('/login', [LoginController::class, 'login'])->name('login');

    Route::post('/register', [RegisterController::class, 'register'])->name('register');

    Route::get('/logout', function () {
        abort(403, 'You are Unauthenticated');
    })->name('logout');
});
// we'll later utilize except option on the resource route in order to exculde the unauthorized action.
