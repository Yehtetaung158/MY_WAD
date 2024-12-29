<?php

use App\Http\Controllers\CategoryApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/category', [CategoryApiController::class, 'index']);
Route::post('/category/store', [CategoryApiController::class, 'store']);
Route::delete('/category/delete/{id}', [CategoryApiController::class, 'destroy']);
Route::put('/category/update/{id}', [CategoryApiController::class, 'update']);
