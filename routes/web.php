<?php

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
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        
    });
    Route::prefix('users')->group(function () {
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
Route::get('/', function () {
    return view('index');
});
Route::get('/product/{id}', function () {
    return view('product');
});
Route::get('/products/{cat_id}', function () {
    return view('products');
});
