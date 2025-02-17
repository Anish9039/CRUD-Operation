<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/products', function () {
//     return view('products'),;
// });
// Route::get('/products', function () {
//     return view('products');
// });


Route::resource('products', ProductController::class);



