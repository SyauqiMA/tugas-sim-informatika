<?php

use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterLoginController;
use App\Http\Controllers\ShoppingCartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function() {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/logout', [RegisterLoginController::class, 'logout']);

    // APIs
    Route::apiResources([
        '/products' => ProductController::class,
        '/categories' => ProductCategoryController::class,
        '/cart-items' => ShoppingCartController::class,
    ]);
});

Route::prefix('auth')->group(function() {
    Route::post('/login', [RegisterLoginController::class, 'login'])->name('login');
    Route::post('/register', [RegisterLoginController::class, 'register']);
});


