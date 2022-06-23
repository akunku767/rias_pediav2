<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\DayController;
use App\Http\Controllers\API\VendorController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\ReviewController;
use App\Http\Controllers\API\HourController;
use App\Http\Controllers\API\PhotoController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
     
Route::middleware('auth:sanctum')->group( function () {
    Route::resource('days', DayController::class);
    Route::resource('vendors', VendorController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('reviews', ReviewController::class);
    Route::resource('hours', HourController::class);
    Route::resource('photos', PhotoController::class);
});