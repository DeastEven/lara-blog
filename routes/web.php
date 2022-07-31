<?php

use Illuminate\Support\Facades\Auth;
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
//Front
Route::get('/', 'App\Http\Controllers\Main\IndexController');

//Back
Route::get('/admin', 'App\Http\Controllers\Admin\Main\IndexController');
Route::get('/admin/categories', 'App\Http\Controllers\Admin\Category\IndexController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
