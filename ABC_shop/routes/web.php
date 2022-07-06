<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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
    return view('main');
});

Route::get('/category' , [CategoryController::class , 'index']);
Route::get('/products' , [ProductController::class , 'index']);
Route::get('/create' , [ProductController::class , 'create']);
Route::post('/update/{id}' , [ProductController::class , 'update']);
Route::get('/edit/{id}' , [ProductController::class , 'edit']);
Route::get('/show/{id}' , [ProductController::class , 'show']);
Route::post('/store' , [ProductController::class , 'store']);



