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



