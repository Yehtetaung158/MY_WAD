<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PhoneController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/item', function () {
//     return view('item.create');
// });

Route::resource('/item', ItemController::class);
Route::resource('/category', CategoryController::class);
Route::resource('/people', PeopleController::class);
Route::resource('/phone', PhoneController::class);
Route::get('/search', [ItemController::class, 'search'])->name('item.search');
