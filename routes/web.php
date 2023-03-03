<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductStockController;
use App\Http\Controllers\Admin\SwappingController;

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

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/users', UserController::class);
    Route::get('/product-stock', [ProductStockController::class, 'index'])->name('product');

    Route::get('/swapping', [SwappingController::class, 'index'])->name('swapping');
    Route::post('/swapping', [SwappingController::class, 'store'])->name('swapping.store');
});

require __DIR__ . '/auth.php';
