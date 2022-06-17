<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DayController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
// use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HourController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ReviewController;

Route::resource('days', DayController::class);

Route::resource('roles', RoleController::class);

Route::resource('users', UserController::class);

Route::resource('vendors', VendorController::class);

// Route::resource('galleries', GalleryController::class);

Route::resource('hours', HourController::class);

Route::resource('services', ServiceController::class);

Route::resource('reviews', ReviewController::class);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
