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


Route::get('users/{id}', function ($id) {
});

Route::post('/change-status', [App\Http\Controllers\UserController::class, 'updateStatus']);
Route::get('/relogreat', [App\Http\Controllers\CityController::class, 'relogreat']);
Route::get('/checkout', [App\Http\Controllers\CityController::class, 'checkout']);
Route::get('/', [App\Http\Controllers\CityController::class, 'index']);
Route::get('/admin-transaction/{transaction_id}', [App\Http\Controllers\TransactionController::class, 'transaction_detail']);
Route::get('/admin-transaction', [App\Http\Controllers\TransactionController::class, 'admin_transaction']);
Route::get('/admin-city', [App\Http\Controllers\CityController::class, 'admin_city']);
Route::get('/details/{cityname}', [App\Http\Controllers\DetailController::class, 'goToDetail']);

Auth::routes();
