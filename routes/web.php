<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DetailController;
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

Route::post('/change-status', [UserController::class, 'updateStatus']);

Route::get('/relogreat', [PagesController::class, 'relogreat']);
Route::get('/checkout', [PagesController::class, 'checkout']);
Route::get('/', [PagesController::class, 'index']);

Route::get('/admin-transaction/{transaction_id}', [TransactionController::class, 'transaction_detail']);
Route::get('/admin-transaction', [TransactionController::class, 'admin_transaction']);

Route::get('/admin-city', [CityController::class, 'admin_city']);
Route::get('/details/{cityname}', [DetailController::class, 'goToDetail']);

//CRUD ADMIN
Route::get('/create-city', [CityController::class, 'create_city_view']);
Route::post('/store', [CityController::class, 'store']);

Auth::routes();
