<?php

use App\Http\Controllers\FeedController;
use App\Http\Controllers\logInController;
use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;
use App\Models\AboutUs;
use App\Models\Product;

Route::get('/', function () {
    return view('Home');
});
Route::get('/product', function () {
    $product = Product::all();
    return view('Product',[
        "products"=>$product
    ]);
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    $about = AboutUs::all();
    return view('About',[
        "team"=>$about
    ]);
});


Route::post("/about",[FeedController::class,"store"]);



Route::get('/register',[RegisterUserController::class,"create"]);
Route::post('/register',[RegisterUserController::class,"store"]);
Route::get("/login" , [logInController::class,"create"]);
Route::post("/login" , [logInController::class,"store"]);
Route::post("/logout" , [logInController::class,"destroy"]);
