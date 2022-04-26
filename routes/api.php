<?php

use App\Http\Controllers\PhoneBookController;
use App\Http\Controllers\PhoneNumbersController;
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

Route::apiResource('phone_book', PhoneBookController::class);
Route::apiResource('phone_numbers', PhoneNumbersController::class);
