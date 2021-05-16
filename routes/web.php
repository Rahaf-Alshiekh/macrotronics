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
    return view('index');
});

Route::get('/services', function () {
    return view('services');

});Route::get('/sign_up', function () {
    return view('sign_up');
});
Route::get('/login', function () {
    return view('login');
});


Route::get('brand',"\App\Http\Controllers\BrandController@index");