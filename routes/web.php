<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
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
    return view('index');
});


//auth

Route::get('/auth', [AuthController::class, 'index'])
    ->name('news');


//group Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('news', AdminNewsController::class);
    Route::get('/addNews', [AdminNewsController::class, 'addNews']);
});

// news
Route::get('/news', [NewsController::class, 'index'])
    ->name('news');

Route::get('/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');

// news category

Route::get('/category', [CategoryController::class, 'index'])
    ->name('categories');

Route::get('/category/{name}', [CategoryController::class, 'show'])
    ->name('category.show');

