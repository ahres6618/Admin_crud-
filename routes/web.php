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

Route::get('/home', function () {
    return view('home');
});

Route::get('/payc', function () {
    return view('check');
});

Route::resource('clients','ClientsController');

Route::resource('products','productsController');

Route::resource('bills','BillsController');

Route::resource('dtails','detailsController');

Route::resource('payments','paymentsController');


