<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Products

Route::apiResource('/products', ProductController::class);
Route::apiResource('/orders', OrderController::class);
Route::apiResource('/users', ProfileController::class);

Route::get('/carts/{userId}', [CartController::class, 'show'])->name('carts.show');
Route::put('/carts/{userId}', [CartController::class, 'add'])->name('carts.add');
Route::delete('/carts/{userId}/{productId}', [CartController::class, 'delete'])->name('carts.delete');