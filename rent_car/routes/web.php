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

Route::get('/fleet', function () {
    return view('fleet');
});

Route::get('/offers', function () {
    return view('offers');
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

Route::get('home', function () {
    return view('admin.home');

});

Route::get('main', function () {
    return view('admin.main');

});

Route::get('product', 'App\Http\Controllers\ProductController@data');

Route::get('order', 'App\Http\Controllers\OrderController@data');

Route::get('history', 'App\Http\Controllers\HistoryController@data');

Route::get('/insert_product', function () {
    return view('admin.insert_product');
});
