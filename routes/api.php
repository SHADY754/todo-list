<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TaskController;

Route::middleware('auth:sanctum')->get('/user', function ( $request) {
    return $request->user();
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{product}', [ProductController::class, 'show']);
Route::get('/tasks' , [TaskController::class, 'index']);
Route::post('/tasks' , [TaskController::class, 'store']);
Route::patch('/tasks/{id}' , [TaskController::class, 'toggleStatus']);
