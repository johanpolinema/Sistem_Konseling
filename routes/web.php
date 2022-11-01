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

Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin');

    Route::prefix('all')->group(function () {    
        Route::get('psikologs', function () {
            return view('admin.psikologlist');
        })->name('adminpsikologlist');
    
        Route::get('/admins', function () {
            return view('admin.adminlist');
        })->name('adminlist');
    
        Route::get('/users', function () {
            return view('admin.userlist');
        })->name('adminuserlist');
    
        Route::get('/redakturs', function () {
            return view('admin.redakturlist');
        })->name('adminredakturlist');
    
        Route::get('/list', function () {
            return view('admin.alllist');
        })->name('adminalllist');
    });

    Route::prefix('transaction')->group(function () {
        Route::get('list', function() {
            return view('admin.alltransactionlist');
        })->name('adminalltransactionlist');

        Route::get('income', function() {
            return view('admin.incomelist');
        })->name('adminincomelist');

        Route::get('psikolog', function() {
            return view('admin.billpsikologlist');
        })->name('billpsikologlist');

        Route::get('redaktur', function() {
            return view('admin.billredakturlist');
        })->name('billredakturlist');
    });
});