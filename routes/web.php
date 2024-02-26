<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController ;
use App\Http\Controllers\AjaxController ;
use App\Http\Controllers\ProductCommentController;
use App\Http\Controllers\CartController;

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Router giỏ hàng
Route::resource('carts', CartController::class);
// Router sản phẩm
Route::resource('products',ProductController::class);
// routes/web.php

Route::get('productAjaxStart', [AjaxController::class, 'Start']);
Route::get('productAjaxPhanTrang', [AjaxController::class, 'phanTrang']);
Route::post('products/{id}/comments', [ProductCommentController::class, 'store'])->name('product.comments.store');

// Route::get('productAjax', [AjaxController::class, 'getProducts']);
Route::get('productAjax', [AjaxController::class, 'getProducts']);

Route::middleware('auth')->group(function () {
    Route::resource('user',UserController::class);
    Route::get('/profile/{user}', [UserController::class, 'profile'])->name('user.profile');
    Route::put('/profile/{user}', [UserController::class, 'update'])->name('user.update-profile');
});
