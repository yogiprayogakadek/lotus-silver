<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Admin\ProductController;
use App\Models\Product;

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

Route::controller(LandingPageController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/class', 'class');
    Route::get('/craftsman', 'craftsman');
    Route::get('/product', 'product');
    Route::get('/product/{slug}', 'productDetail');
    Route::get('/gallery', 'gallery');
    Route::get('/about', 'about');
    // Route::get('/comingsoon', 'comingsoon');
});

Route::prefix('adminlotus23')->group(function () {
    Auth::routes();
});

Route::middleware('CheckRole:1')->prefix('/control')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    Route::controller(ProductController::class)->prefix('product')->as('product.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('destroy');
    });
});
