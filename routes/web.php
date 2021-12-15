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

Route::get('/admin-city', function () {
    return view('admin-city');
});

Route::get('/admin-transaction', function () {
    return view('admin-transaction');
});


Route::get('users/{id}', function ($id) {
});

Route::post('/change-status', [App\Http\Controllers\UserController::class, 'updateStatus']);

Route::get('/relogreat', [App\Http\Controllers\PagesController::class, 'relogreat']);
Route::get('/checkout', [App\Http\Controllers\PagesController::class, 'checkout']);
Route::get('/', [App\Http\Controllers\PagesController::class, 'index']);
Route::get('/details/{cityname}', [App\Http\Controllers\DetailController::class, 'goToDetail']);

Auth::routes();
