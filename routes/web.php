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
    return view('welcome');
});

Route::resource('admin/jenis_barang', 'admin\JenisBarangController');
Route::resource('admin/barang', 'admin\BarangController');

Route::get('/admin', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/admin/upload', function () {
    return view('pages.upload');
})->name('upload');

Route::get('/admin/offline', function () {
    return view('pages.offline');
})->name('offline');

Route::get('/admin/laporan', function () {
    return view('pages.laporan');
})->name('laporan');

Route::get('/home', function () {
    return view('pages.user.home');
})->name('home');

Route::get('/home', function () {
    return view('pages.user.home');
})->name('home');

Route::get('/cart', function () {
    return view('pages.user.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('pages.user.checkout');
})->name('checkout');

Route::get('/register', function () {
    return view('pages.user.register');
})->name('register');

Route::get('/product', function () {
    return view('pages.user.product');
})->name('product');

Route::get('/productdetail', function () {
    return view('pages.user.productdetail');
})->name('productdetail');

Route::get('/contact', function () {
    return view('pages.user.contact');
})->name('contact');
