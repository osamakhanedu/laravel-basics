<?php

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
    return view('home');
    // return "<h1>Hello world";
});

Route::get('/contact', function () {
    return view('contact');
 
});

Route::get('/about', function () {
    return view('about');    
});


Route::get('/customers', 'CustomersController@list');
Route::post('/customers', 'CustomersController@store');

