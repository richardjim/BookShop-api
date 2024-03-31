<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

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

Route::post('/login', [AuthorController::class, 'login']);
Route::post('/register', [AuthorController::class, 'register']);

Route::middleware('auth:api')->group(function () {
    Route::get('/user/{id}', [AuthorController::class, 'show']);
    Route::put('/user/{id}', [AuthorController::class, 'update']);

    Route::apiResource('/books', BookController::class);
});
