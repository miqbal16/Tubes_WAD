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

Route::get('/', [App\Http\Controllers\index::class, 'carHome'])->name('index.index');

// menu costumer

Route::get('/about', function () {
    return view('about');
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

Route::get('/mobil_tanpa_supir','\App\Http\Controllers\CarListController@carMenu1');

Route::get('/mobil_dengan_supir','\App\Http\Controllers\CarListController@carMenu2');

Route::get('/team', function () {
    return view('team');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});



//-------------------------------------


// admin

Route::get('/car_list', '\App\Http\Controllers\CarListController@carList')->name('carList.carPage');

Route::get('/car_list/InsertProduct', '\App\Http\Controllers\CarListController@addCar')->name('carList.addCar');
Route::get('/car_list/{id}/UpdateProduct', '\App\Http\Controllers\CarListController@updateCar')->name('carList.update.car');
Route::patch('/car_list/{id}', '\App\Http\Controllers\CarListController@update')->name('carList.update');
Route::post('/car_list','\App\Http\Controllers\CarListController@saveCar')->name('carList.saveCar');
Route::post('/car_list/delete','\App\Http\Controllers\CarListController@delete')->name('carList.delete');
Route::post('/','\App\Http\Controllers\UlasanController@addUlasan')->name('ulasan.addUlasan');
Route::post('/admin', '\App\Http\Controllers\CarListController@adminPage')->name('myAdmin');
Route::view('/pembayaran/virtual_number', 'virtual_number')->name('virtual_number');
Route::view('/pembayaran/success', 'bayar_ditempat')->name('tunai');
Route::post('/pembayaran/proses', '\App\Http\Controllers\HomeController@saveDataOrder')->name('dataOrder');
Route::get('ulasan','\App\Http\Controllers\UlasanController@index')->name('ulasan.page');
Route::post('ulasan/delete','\App\Http\Controllers\UlasanController@delete')->name('ulasan.delete');
Route::get('ulasan/ulasan_terkirim','\App\Http\Controllers\UlasanController@ulasanSuccess')->name('ulasan.terkirim');
Route::get('/order/{id}/ProsesOrder', '\App\Http\Controllers\OrderController@prosesOrder')->name('order.proses.page');
Route::post('/order/buy', '\App\Http\Controllers\OrderController@buy')->name('order.success');
Route::get('/history', '\App\Http\Controllers\HomeController@ListOrder')->name('history.page');

Route::post('/register/add','\App\Http\Controllers\authcontroller@register')->name('register.register');
Route::get('/index', '\App\Http\Controllers\authcontroller@halamanutama')->name('halamanutama.index');
Route::get('/register', '\App\Http\Controllers\authcontroller@halamanregister')->name('halamanregister.register');
Route::get('/login', '\App\Http\Controllers\authcontroller@halamanlogin')->name('halamanlogin.login');
Route::post('history/ubah', '\App\Http\Controllers\HomeController@ubahPembayaran')->name('history.ubah');

// -------


Auth::routes();
Route::post('/pembayaran',[App\Http\Controllers\HomeController::class, 'bayar'])->name('pembayaran');
Route::get('/{status}', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
