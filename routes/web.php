<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/details', function () {
    return view('detail');
});

Route::get('/admin-city', function () {
    return view('admin-city');
});

Route::get('/admin-transaction', function () {
    return view('admin-transaction');
});

Route::get('/relogreat', function () {
    return view('relogreat');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/detail', [App\Http\Controllers\DetailController::class, 'goToDetail']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
