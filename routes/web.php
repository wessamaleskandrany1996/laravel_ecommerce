<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FrontendController as AdminFrontendController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\Frontend\UserController;
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

Route::get('/', [FrontendController::class, 'index']);
Route::get('category', [FrontendController::class,'category']);
Route::get('view-category/{slug}', [FrontendController::class,'viewcategory']);
Route::get('view-category/{cate_slug}/{prod_slug}', [FrontendController::class,'viewproduct']);


Auth::routes();

Route::post('add-to-cart', [CartController::class, 'addproduct']);
Route::post('delete-cart-item', [CartController::class, 'destroy']);
Route::post('update-quantity', [CartController::class, 'updateQuantity']);


Route::middleware(['auth'])->group(function () {
    Route::get('cart', [CartController::class, 'viewCart']);
    Route::get('checkout', [CheckoutController::class, 'index']);
    Route::post('place-order', [CheckoutController::class, 'placeOrder']);

    Route::get('my-orders', [UserController::class, 'index']);
    Route::get('view-order/{id}', [UserController::class, 'view']);


});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard','App\Http\controllers\Admin\FrontendController@index');
    Route::get('categories','App\Http\controllers\Admin\CategoryController@index');
    Route::get('addcategory','App\Http\controllers\Admin\CategoryController@add');
    Route::post('insert-category','App\Http\controllers\Admin\CategoryController@insert');
    Route::get('editcategory/{id}', [CategoryController::class ,'edit']);
    Route::put('update-category/{id}', [CategoryController::class,'update']);
    Route::get('delete-category/{id}', [CategoryController::class, 'destroy']);

    Route::get('products','App\Http\controllers\Admin\ProductController@index');
    Route::get('addproduct','App\Http\controllers\Admin\ProductController@add');
    Route::post('insert-product','App\Http\controllers\Admin\ProductController@insert');
    Route::get('editproduct/{id}', [ProductController::class ,'edit']);
    Route::put('update-product/{id}', [ProductController::class,'update']);
    Route::get('delete-product/{id}', [ProductController::class, 'destroy']);

    Route::get('users', [AdminFrontendController::class, 'users']);
    Route::get('orders', [OrderController::class, 'index']);
    Route::get('admin/view-order/{id}', [OrderController::class, 'view']);
    Route::put('update-order/{id}', [OrderController::class, 'updateorder']);
    Route::get('order-history', [OrderController::class, 'history']);
});
