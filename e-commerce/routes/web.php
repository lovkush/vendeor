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




Route::post('/store','MainController@store');
Route::get('/login','MainController@login');
Route::get ('/registration',function()
			{


return view( 'e-shop/registration');

});



Route::get('/','MainController@cityfunct');
Route::get('/findArea','MainController@findArea');
Route::post('/nav','MainController@Categories');
Route::post('/about','MainController@about');
Route::get('/shopname/{projects}','MainController@shopname');

Route::match(['get','post'],'/product/filter','MainController@filter');

 Route::get('/product/{projects1}','MainController@product');
 Route::get('/cat/{id}','MainController@filter')->name('cats');
 Route::get('/product-detail/{id}','MainController@detialpro');

Route::get('cart', 'MainController@cart');

Route::get('add-to-cart/{id}', 'MainController@addToCart');

Route::patch('update-cart', 'MainController@update');

Route::delete('remove-from-cart', 'MainController@remove');

Route::get('/email_available', 'EmailAvailable@index');

Route::post('/email_available/check', 'EmailAvailable@check')->name('email_available.check');


Auth::routes();

Route::get('/home/', 'HomeController@index');
Route::post('/submit/','HomeController@submit');

Route::get('/checkout/','HomeController@checkout');
