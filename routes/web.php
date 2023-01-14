<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminProductController;
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
    return view('top');
});

//----------------------------------------------------------------

//DLSite
Route::get('/', [ProductController::class, 'index']);

//----------------------------------------------------------------


//----------------------------------------------------------------
//管理者画面
//----------------------------------------------------------------

//商品
Route::get('admin/products', [AdminProductController::class, 'index']);
Route::get('admin/products/{id}/edit/', [AdminProductController::class, 'edit']);
Route::put('admin/products/{id}', [AdminProductController::class, 'update']);
Route::delete('admin/products/{id}', [AdminProductController::class, 'destroy']);
Route::post('admin/products', [AdminProductController::class, 'store']);
Route::get('admin/products/create', [AdminProductController::class, 'create']);

//ユーザー

//注文