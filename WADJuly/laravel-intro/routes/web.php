<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/{id}', function ($id) {
    $products = file_get_contents("https://fakestoreapi.com/products");
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/about', function () {
    return view('pages.about');
});
