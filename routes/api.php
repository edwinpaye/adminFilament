<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductController;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('products', [ProductController::class, 'index']);
Route::get('products/{id}', [ProductController::class, 'show']);

Route::get('galleries', [GalleryController::class, 'index']);
Route::get('galleries/{id}', [GalleryController::class, 'show']);