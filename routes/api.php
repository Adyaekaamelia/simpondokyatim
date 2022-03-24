<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\DataanakController;
use App\Http\Controllers\API\KategoriController;
use App\Http\Controllers\API\KebutuhanController;
use App\Http\Controllers\API\UserController;
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

Route::resource('kegiatan', KategoriController::class);
Route::resource('dataanak', DataanakController::class);
Route::resource('kebutuhan', KebutuhanController::class);
Route::resource('User', UserController::class);
Route::resource('dataanak2', ApiController::class);
