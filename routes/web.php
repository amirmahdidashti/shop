<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class,"loginGet"]);
Route::post('/login', [AuthController::class,"loginPost"]);
Route::get('/logout', [AuthController::class,"logout"]);
Route::get('/register', [AuthController::class,"registerGet"]);
Route::post('/register', [AuthController::class,"registerPost"]);
Route::get('/profile', [AuthController::class,"profile"]);
Route::post('/profile', [AuthController::class,"editProfile"]);
Route::get('/profile/deleteimg', [AuthController::class,"deleteImg"]);

Route::get('/', [SiteController::class,"index"]);
Route::get('/product/{id}', [SiteController::class,"product"]);
Route::get('/products/{cat_id}',[SiteController::class,"products"]);
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class,"list"]);
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class,"list"]);
        Route::prefix('insert')->group(function () {
            Route::get('/', [UserController::class,"insertGet"]);
            Route::post('/', [UserController::class,"insertPost"]);
        });
        Route::get('/delete/img/{id}',[UserController::class,"deleteImg"]);
        Route::get('/delete/{id}',[UserController::class,"delete"]);
        Route::get('/{id}', [UserController::class,"editGet"]);
        Route::post('/{id}', [UserController::class,"editPost"]);
        
    });
    Route::prefix('products')->group(function () {
        Route::get('/', [ProductsController::class,"list"]);
        Route::prefix('insert')->group(function () {
            Route::get('/', [ProductsController::class,"insertGet"]);
            Route::post('/', [ProductsController::class,"insertPost"]);
        });
        Route::get('/delete/img/{id}',[ProductsController::class,"deleteImg"]);    
        Route::get('/delete/{id}',[ProductsController::class,"delete"]);    
        Route::get('/{id}', [ProductsController::class,"editGet"]);
        Route::post('/{id}', [ProductsController::class,"editPost"]);
    });
    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoriesController::class,"list"]);
        Route::prefix('insert')->group(function () {
            Route::get('/', [CategoriesController::class,"insertGet"]);
            Route::post('/', [CategoriesController::class,"insertPost"]);
        });
        Route::get('/delete/img/{id}',[CategoriesController::class,"deleteImg"]);
        Route::get('/delete/{id}',[CategoriesController::class,"delete"]);
        Route::get('/{id}', [CategoriesController::class,"editGet"]);
        Route::post('/{id}', [CategoriesController::class,"editPost"]);
    });
    
});

