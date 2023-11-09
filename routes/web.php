<?php

use Illuminate\Support\Facades\Route;
/* use lokasipackage/class */

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

Route::get('halo',function(){
    //bisa diisi program apa saja
 return "Halo Apa Kabar" ;
});

Route::get('halo2',function(){
    return "<h1>Halao Apa Kabar</h1>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('/pertemuan1', function () {
    return view('P1');
});

Route::get('/pertemuan2', function () {
    return view('link');
});

Route::get('/pertemuan3', function () {
    return view('style');
});

Route::get('/pertemuan4', function () {
    return view('layout');
});

Route::get('/pertemuan5', function () {
    return view('P5');
});

Route::get('/tugas1', function () {
    return view('tugas1');
});

Route::get('/TIY1', function () {
    return view('TIY1');
});

Route::get('/TIY2', function () {
    return view('TIY2');
});

Route::get('/TIY3', function () {
    return view('TIY3');
});

Route::get('/TIY4', function () {
    return view('TIY4');
});

Route::get('/tugas3', function () {
    return view('tugas3');
});

Route::get('/tugas4', function () {
    return view('tugas4');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');

Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');