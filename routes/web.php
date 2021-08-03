<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCartController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/admin/product/create', [ProductController::class, 'create']);
Route::post('/admin/product/create', [ProductController::class, 'store']);
Route::get('/admin/product/list', [ProductController::class, 'list']);

Route::get('add', [ShoppingCartController::class, 'add']);
Route::get('show', [ShoppingCartController::class, 'show']);
Route::get('remove', [ShoppingCartController::class, 'remove']);
Route::post('save', [ShoppingCartController::class, 'save']);
