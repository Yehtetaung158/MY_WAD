<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about-us', function () {
    return "I am about";
});

Route::get('contact', function () {
    return "I am contact";
});

Route::get('posts', function () {
    return "I am posts";
});

Route::get('posts/{id}', function ($id) {
    return "I am post " . $id;
});

Route::get('user/{name?}', function ($name = null) {
    return "My user name is " . $name;
});


//try some calculations===>

//shopping data-/products
Route::get('/products', function () {
    $res = Http::withOptions(['verify' => false])->get("https://fakestoreapi.com/products");
    $products = $res->json();
    return $products;
});


//shopping data-/products/max-pice
Route::get('/products/{max_price}', function ($max_price) {
    $res = Http::withOptions(['verify' => false])->get("https://fakestoreapi.com/products");
    $products = $res->collect();
    // dd($products->where('price', '<', $max_price)->all());
    return $products->where('price', '<', $max_price)->all();
});

//filter data between /products.price-between/{minAmout}/and/maxAmount}
Route::get('/products/pricebetween/{min_price}/{max_price}', function ($min_price, $max_price) {
    $res = Http::withOptions(['verify' => false])->get("https://fakestoreapi.com/products");
    $products = $res->collect();
    return $products->whereBetween('price', [$min_price, $max_price])->all();
});

//currency convetor
Route::get('exchange/{fromCurrency}/{amount}/{toCurrency}', function ($fromCurrency, $amount, $toCurrency) {
    $response = Http::withOptions(['verify' => false])->get("http://forex.cbm.gov.mm/api/latest");

    $rates = $response->json('rates');

    $fromRate = (float) str_replace(',', '', $rates[$fromCurrency]);
    $toRate = (float) str_replace(',', '', $rates[$toCurrency]);

    $convertedAmount = round(($amount / $fromRate) * $toRate, 3);

    return response()->json([
        'fromCurrency' => $fromCurrency,
        'toCurrency' => $toCurrency,
        'amount' => $amount,
        'convertedAmount' => $convertedAmount . " $toCurrency"
    ]);
});
