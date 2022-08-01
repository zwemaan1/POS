<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/food', function () {
    return view('food');
});

Route::get('/tables', function(){
    return view('table');
});


Route::get('/testRes', function(){
    return view("testRes");
});

Route::get("/FunTest", function(){
    return view("FunTest");
});

