<?php

use App\Http\Controllers\ordersController;

use App\Http\Controllers\salesController;
use App\Http\Controllers\incomeController;
use App\Http\Controllers\stocksController;

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
    return view('welcome');
});

Route::get('/orders/getOrders', [ordersController::class, 'index']);
Route::get('/sales/getSales', [salesController::class, 'index']);
Route::get('/stocks/getStocks', [stocksController::class, 'index']);
Route::get('/incomes/getIncomes', [incomeController::class, 'index']);
