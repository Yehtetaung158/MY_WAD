<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/{id}', function ($id) {
    $products = file_get_contents("https://fakestoreapi.com/products");
});

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/contact', function () {
//     return view('pages.contact');
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });

Route::get('/home', [ItemController::class, 'home']);
Route::get('/contact', [ItemController::class, 'contact']);
Route::get('/about', [ItemController::class, 'about']);
Route::get('/area/{w}/{h}',[ItemController::class,'calculate']);
Route::get('/profile/{age?}',[ItemController::class,'profile']);
Route::get('/test',[TestController::class,'test']);

Route::resource('product', ProductController::class);
