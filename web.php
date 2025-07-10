<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);
Route::resource('products', ProductController::class)->except(['create', 'show']);

Route::get('/products/load', [ProductController::class, 'loadProducts'])->name('products.load');