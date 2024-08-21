<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AdminController;
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
Route::get('/', [SiteController::class,"index"]);
Route::get('/product/{id}', [SiteController::class,"product"]);
Route::get('/products/{cat_id}',[SiteController::class,"products"]);
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class,"list"]);
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class,"list"]);
        Route::get('/{id}', [UserController::class,"index"]);
        Route::post('/{id}', [UserController::class,"index"]);
        Route::prefix('insert')->group(function () {
            Route::get('/', [UserController::class,"index"]);
            Route::post('/', [UserController::class,"index"]);
        });
        Route::get('/delete/{id}',[UserController::class,"index"]);
    });
    Route::prefix('products')->group(function () {
        Route::get('/', [ProductsController::class,"list"]);
        Route::get('/{id}', [ProductsController::class,"index"]);
        Route::post('/{id}', [ProductsController::class,"index"]);
        Route::prefix('insert')->group(function () {
            Route::get('/', [ProductsController::class,"index"]);
            Route::post('/', [ProducstController::class,"index"]);
        });
        Route::get('/delete/{id}',[ProducstController::class,"index"]);    
    });
    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoriesController::class,"list"]);
        Route::get('/{id}', [CategoriesController::class,"index"]);
        Route::post('/{id}', [CategoriesController::class,"index"]);
        Route::prefix('insert')->group(function () {
            Route::get('/', [CategoriesController::class,"index"]);
            Route::post('/', [CategoriesController::class,"index"]);
        });
        Route::get('/delete/{id}',[CategoriesController::class,"index"]);
    });
    
});

