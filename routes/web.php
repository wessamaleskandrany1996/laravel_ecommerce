<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard','App\Http\controllers\Admin\FrontendController@index');
    Route::get('categories','App\Http\controllers\Admin\CategoryController@index');
    Route::get('addcategory','App\Http\controllers\Admin\CategoryController@add');
    Route::post('insert-category','App\Http\controllers\Admin\CategoryController@insert');
});
