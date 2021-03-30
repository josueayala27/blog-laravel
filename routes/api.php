<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PublicationController;

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

Route::apiResource('users', UserController::class);
Route::apiResource('publications', PublicationController::class);
Route::apiResource('comments', CommentController::class);

/* All publications by user */
Route::get('users/{user}/publications', [PublicationController::class, 'show']);

/* All comments by user */
Route::get('users/{user}/comments', [CommentController::class, 'show']);
