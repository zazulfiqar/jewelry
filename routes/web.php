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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products','ProductController@index')->name('products');


Route::get('/simple-product', 'ProductController@simpleproducts')->name('simpleproducts');
Route::get('add-to-cart/{id}', 'ProductController@addToCart')->name('add-to-cart');

Route::patch('update-cart', 'ProductController@updateCart');
Route::delete('remove-from-cart', 'ProductController@removeCart');

Route::get('/productdetail/{id}','ProductController@productdetail')->name('productdetail');
Route::get('/diamonds', 'DiamondController@index')->name('diamonds');
Route::get('/cart','CartController@index')->name('cart');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blogdetail', 'BlogdetailsController@index')->name('blogdetail');
Route::get('/contact', 'ContactController@index')->name('contact');

Route::post('/nextpage' , 'ProductController@nextpage')->name('nextpage');
Route::post('/nextpage_virtual' ,'ProductController@nextpage_virtual')->name('nextpage_virtual');
