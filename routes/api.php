<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/products', [ProductController::class, 'index']); 
Route::get('/products/{id}', [ProductController::class, 'show']); //melihat data
Route::post('/products', [ProductController::class, 'store']); //membuat data
Route::put('/products/{id}', [ProductController::class, 'update']); //update data
Route::delete('/products/{id}', [ProductController::class, 'destroy']); //hapus data

