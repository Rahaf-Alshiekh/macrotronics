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

<<<<<<< HEAD
Route::get('/', function () {
    return view('index');
});
=======
// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', 'ProductController@index');
>>>>>>> b7fada83e3dcae0623bfc9ea878b7030dbcd44bb

Route::get('/services', function () {
    return view('services');

});Route::get('/sign_up', function () {
    return view('sign_up');
});
Route::get('/login', function () {
    return view('login');
});


Route::get('brand',"\App\Http\Controllers\BrandController@index");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'shop', 'as' => 'product.'], function() {
    Route::get('index', 'ProductController@index')->name('index');
    Route::get('c/{taxonomyName}/{taxon}', 'ProductController@index')->name('category');
    Route::get('p/{product}', 'ProductController@show')->name('show');
});

Route::group(['prefix' => 'cart', 'as' => 'cart.'], function() {
    Route::get('show', 'CartController@show')->name('show');
    Route::post('add/{product}', 'CartController@add')->name('add');
    Route::post('update/{cart_item}', 'CartController@update')->name('update');
    Route::post('remove/{cart_item}', 'CartController@remove')->name('remove');
});

Route::group(['prefix' => 'checkout', 'as' => 'checkout.'], function() {
    Route::get('show', 'CheckoutController@show')->name('show');
    Route::post('submit', 'CheckoutController@submit')->name('submit');
});

