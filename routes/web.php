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
    Route::get('/', [AdminController::class,"index"]);
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class,"index"]);
        Route::get('/{id}', [UserController::class,"index"]);
        Route::post('/{id}', [UserController::class,"index"]);
        Route::prefix('insert')->group(function () {
            Route::get('/', [UserController::class,"index"]);
            Route::post('/', [UserController::class,"index"]);
        });
        Route::get('/delete/{id}',[UserController::class,"index"]);
    });
    Route::prefix('products')->group(function () {
        Route::get('/', function () {
            
        });
        Route::get('/{id}', function () {
            
        });
        Route::post('/{id}', function () {
            
        });
        Route::prefix('insert')->group(function () {
            Route::get('/', function () {
                
            });
            Route::post('/', function () {
                
            });
        });
        Route::get('/delete/{id}', function () {
            
        });
    });
    Route::prefix('categories')->group(function () {
        Route::get('/', function () {
            
        });
        Route::get('/{id}', function () {
            
        });
        Route::post('/{id}', function () {
            
        });
        Route::prefix('insert')->group(function () {
            Route::get('/', function () {
                
            });
            Route::post('/', function () {
                
            });
        });
        Route::get('/delete/{id}', function () {
            
        });
    });
});

