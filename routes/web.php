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
Route::get('/admin/categories', 'App\Http\Controllers\Admin\Category\IndexController')->name('admin.category.index');
Route::get('/admin/categories/create', 'App\Http\Controllers\Admin\Category\CreateController')->name('admin.category.create');
Route::post('/admin/categories', 'App\Http\Controllers\Admin\Category\StoreController')->name('admin.category.store');
Route::get('/admin/categories/{category}', 'App\Http\Controllers\Admin\Category\ShowController')->name('admin.category.show');
Route::get('/admin/categories/{category}/edit', 'App\Http\Controllers\Admin\Category\EditController')->name('admin.category.edit');
Route::patch('/admin/categories/{category}', 'App\Http\Controllers\Admin\Category\UpdateController')->name('admin.category.update');
Route::delete('/admin/categories/{category}', 'App\Http\Controllers\Admin\Category\DeleteController')->name('admin.category.delete');
//Tag
Route::get('/admin/tag', 'App\Http\Controllers\Admin\Tag\IndexController')->name('admin.tag.index');
Route::get('/admin/tag/create', 'App\Http\Controllers\Admin\Tag\CreateController')->name('admin.tag.create');
Route::post('/admin/tag', 'App\Http\Controllers\Admin\Tag\StoreController')->name('admin.tag.store');
Route::get('/admin/tag/{tag}', 'App\Http\Controllers\Admin\Tag\ShowController')->name('admin.tag.show');
Route::get('/admin/tag/{tag}/edit', 'App\Http\Controllers\Admin\Tag\EditController')->name('admin.tag.edit');
Route::patch('/admin/tag/{tag}', 'App\Http\Controllers\Admin\Tag\UpdateController')->name('admin.tag.update');
Route::delete('/admin/tag/{tag}', 'App\Http\Controllers\Admin\Tag\DeleteController')->name('admin.tag.delete');
//Post
Route::get('/admin/post', 'App\Http\Controllers\Admin\Post\IndexController')->name('admin.post.index');
Route::get('/admin/post/create', 'App\Http\Controllers\Admin\Post\CreateController')->name('admin.post.create');
Route::post('/admin/post', 'App\Http\Controllers\Admin\Post\StoreController')->name('admin.post.store');
Route::get('/admin/post/{post}', 'App\Http\Controllers\Admin\Post\ShowController')->name('admin.post.show');
Route::get('/admin/post/{post}/edit', 'App\Http\Controllers\Admin\Post\EditController')->name('admin.post.edit');
Route::patch('/admin/post/{post}', 'App\Http\Controllers\Admin\Post\UpdateController')->name('admin.post.update');
Route::delete('/admin/post/{post}', 'App\Http\Controllers\Admin\Post\DeleteController')->name('admin.post.delete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
