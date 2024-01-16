<?php

use App\Http\Controllers\bookCategoryController;
use App\Http\Controllers\bookController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('bookCategory')
    ->name('bookCategory')
    ->group(function () {
        Route::get('/', [bookCategoryController::class, 'index'])->name('index');
        Route::post('/', [bookCategoryController::class, 'store'])->name('store');
        Route::get('/{bookCategory}', [bookCategoryController::class, 'show'])->name('show');
    });

Route::prefix('Book')
    ->name('Book')
    ->group(function () {
        Route::get('/', [bookController::class, 'index'])->name('index');
    });