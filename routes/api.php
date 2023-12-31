<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;

Route::resource('verify', AuthController::class);

Route::post('/auth/register', [AuthController::class, 'createUser'])->name('register');
Route::post('/auth/login', [AuthController::class, 'loginUser']);
Route::post('/auth/verificationCode', [AuthController::class, 'verificationCode']);

Route::get('getAllCategories', [CategoryController::class, 'getAllCategories'])->middleware('auth:sanctum');

Route::get('getAllProducts', [ProductController::class, 'getAllProducts'])->middleware('auth:sanctum');
Route::get('getProduct/{pro_id}', [ProductController::class, 'getProduct'])->middleware('auth:sanctum');
Route::get('getCategoryProducts/{cat_id}', [ProductController::class, 'getCategoryProducts'])->middleware('auth:sanctum');
Route::get('productsHasDiscount', [ProductController::class, 'productsHasDiscount'])->middleware('auth:sanctum');

Route::post('createOrder', [OrderController::class, 'createOrder'])->middleware('auth:sanctum');
Route::get('getAllOrders', [OrderController::class, 'getAllOrders'])->middleware('auth:sanctum');
Route::get('getUserOrders/{user_id}', [OrderController::class, 'getUserOrders'])->middleware('auth:sanctum');
Route::post('removeOrder/{order_id}', [OrderController::class, 'removeOrder'])->middleware('auth:sanctum');
