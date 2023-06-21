<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\SuccessCheckoutController;

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

// frontend

Route::get('/', [HomeController::class, 'index']);
Route::get('/detail', [DetailController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::get('/success-checkout', [SuccessCheckoutController::class, 'index']);

// admin
Route::prefix('admin')
    ->namespace('admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index']);
    });
