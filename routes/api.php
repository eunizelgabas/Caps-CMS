<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;

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

Route::post('/temporary-stocks', [TemporaryStockController::class, 'store']);

Route::get('/doctors/{doctor}/services', [DoctorController::class, 'getServices']);

Route::get('/users/search', [RegisteredUserController::class, 'search']);

Route::get('/get-data', [DoctorController::class, 'getDoctorServices']);
