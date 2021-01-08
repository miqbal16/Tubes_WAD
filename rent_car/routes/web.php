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

Route::get('/about', function () {
    return view('about');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/blog-post', function () {
    return view('blog-post');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/mobil_tanpa_supir', function () {
    return view('mobil_tanpa_supir');
});

Route::get('/mobil_dengan_supir', function () {
    return view('mobil_dengan_supir');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

/*..............Admin Land..................*/

Route::get('/car_list', '\App\Http\Controllers\ProductController@productPage')->name('product.productPage');

Route::get('/car_list/InsertProduct', '\App\Http\Controllers\ProductController@insertProductPage');
Route::get('/car_list/{id}/UpdateProduct', '\App\Http\Controllers\ProductController@updateProductPage')->name('product.update.page');
Route::patch('/car_list/{id}', '\App\Http\Controllers\ProductController@update')->name('product.update');
Route::post('/car_list','\App\Http\Controllers\ProductController@storeProduct')->name('product.storeProduct');
Route::post('/car_list/delete','\App\Http\Controllers\ProductController@delete')->name('product.delete');
Route::post('/index','\App\Http\Controllers\UlasanController@addUlasan')->name('ulasan.addUlasan');
Route::view('/admin', 'admin.home');
Route::get('ulasan','\App\Http\Controllers\UlasanController@index')->name('order.page');
Route::post('ulasan/delete','\App\Http\Controllers\UlasanController@delete')->name('ulasan.delete');

Route::get('/order/{id}/ProsesOrder', '\App\Http\Controllers\OrderController@prosesOrder')->name('order.proses.page');
Route::post('/order/buy', '\App\Http\Controllers\OrderController@buy')->name('order.success');
Route::get('/history', '\App\Http\Controllers\OrderController@history')->name('history.page');


