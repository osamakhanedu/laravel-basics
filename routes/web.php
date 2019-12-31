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


Route::resource('customers', 'CustomersController');


// Route::get('/customers', 'CustomersController@index');  
// Route::get('/customers/create', 'CustomersController@create');
// Route::post('/customers', 'CustomersController@store');
// Route::get('/customers/{customer}', 'CustomersController@show');
// Route::get('/customers/{customer}/edit', 'CustomersController@edit');
// Route::put('/customers/{customer}', 'CustomersController@update');
// Route::get('/customers/{customer}/edit', 'CustomersController@edit');
// Route::delete('/customers/{customer}', 'CustomersController@destory');

