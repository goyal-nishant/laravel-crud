<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/',[ProductController::class,'index'] )->name('products.index');
Route::get('/products/create',[ProductController::class,'create'] )->name('products.create');
Route::post('/products/store',[ProductController::class,'store'] )->name('products.store');
Route::get('products/{id}/edit',[ProductController::class,'edit'] );
Route::put('products/{id}/update', [ProductController::class, 'update'])->name('products.update');
Route::get('products/{id}/view',[ProductController::class,'view'] );
Route::get('products/{id}/delete',[ProductController::class,'delete'] );
