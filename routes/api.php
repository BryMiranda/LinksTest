<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BookLoanController;
use App\Http\Controllers\BookRegistryController;
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

Route::group(['prefix' => 'links'], function () {
    Route::get('/books', [BookController::class, 'index'])->name('api.books.index');
    
    Route::post('/books/{bookId}/loan', [BookLoanController::class, 'store'])->name('api.books.loan.store');

    Route::post('/books/{bookId}/register', [BookRegistryController::class, 'store'])->name('api.books.register.store');
});
