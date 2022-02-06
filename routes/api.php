<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
//     Route::get('', [Admin::class, 'index'])->name('index');
//     Route::get('/create', [Admin::class, 'create'])->name('create');
//     Route::post('', [Admin::class, 'store'])->name('store');
//     Route::get('/edit/{id}', [Admin::class, 'edit'])->name('edit');
//     Route::post('/update', [Admin::class, 'update'])->name('update');
//     Route::get('/destroy/{id}', [Admin::class, 'destroy'])->name('destroy');
//     Route::get('/show/{id}', [Admin::class, 'show'])->name('show');
//     Route::get('/print/{id}', [Admin::class, 'print'])->name('print');
// });


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('products')->name('products.')->group(function () {
    Route::get('', [ProductController::class, 'index'])->name('index');
    // Route::get('/create', [ProductController::class, 'create'])->name('create');
    // Route::post('', [ProductController::class, 'store'])->name('store');
    // Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
    // Route::post('/update', [ProductController::class, 'update'])->name('update');
    // Route::get('/destroy/{id}', [ProductController::class, 'destroy'])->name('destroy');
    Route::get('/show/{product}', [ProductController::class, 'show'])->name('show');
});
// Route::prefix('orders')->name('orders.')->group(function () {
//     Route::post('', [OrderController::class, 'create'])->name('index');
//     // Route::get('/create', [OrderController::class, 'create'])->name('create');
//     // Route::post('', [OrderController::class, 'store'])->name('store');
//     // Route::get('/edit/{id}', [OrderController::class, 'edit'])->name('edit');
//     // Route::post('/update', [OrderController::class, 'update'])->name('update');
//     // Route::get('/destroy/{id}', [OrderController::class, 'destroy'])->name('destroy');
//     // Route::get('/show/{product}', [OrderController::class, 'show'])->name('show');
// });
Route::post('/orders', [OrderController::class, 'create']);
Route::get('/order', [OrderController::class, 'findAll']);
