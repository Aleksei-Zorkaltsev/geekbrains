<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use \App\Http\Controllers\Admin\UserController;
use \App\Http\Controllers\Account\IndexController as AccountController;
use App\Http\Controllers\Admin\IndexController as AdminController;
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
})->name('hello_page');


//auth
Route::group(['middleware' => 'auth'], function (){
    Route::get('/account', AccountController::class)->name('account');
    Route::get('/logout', function (){
        \Auth::logout();
        return redirect()->route('login');
    })->name('logout');

    //group Admin

    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function(){
        Route::resource('categories', AdminCategoryController::class)
            ->name('index', 'categories');
        Route::resource('news', AdminNewsController::class)
            ->name('index', 'news');
        Route::resource('users', UserController::class)
            ->name('index', 'users');

        Route::get('index', AdminController::class)->name('index');
    });

});



// news
Route::get('/news', [NewsController::class, 'index'])
    ->name('news');

Route::get('/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');


// category

Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories');

Route::get('/category/{id}', [CategoryController::class, 'show'])
    ->name('category.show');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
