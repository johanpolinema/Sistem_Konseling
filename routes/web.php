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
})-> name('home');

Route::get('/tentang-kami', function(){
    return view('user.about');
})-> name('about');

Route::get('/psikolog', function(){
    return view('user.doctors');
})-> name('doctor');

Route::get('/manajemen', function(){
    return view('user.management');
})-> name('management');

Route::get('/artikel', function(){
    return view('user.blog');
})-> name('blog');

Route::get('/view-artikel', function(){
    return view('user.blog-details');
})-> name('blog-detail');
