<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/item', function () {
//     return view('item.create');
// });

Route::resource('/item',ItemController::class);
