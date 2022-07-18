<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DayController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\HourController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\GoogleController;

// Route::resource('/', WelcomeController::class);

Route::get('auth/google',[GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback',[GoogleController::class, 'handleToGoogleCallback'])->name('google.callback');

Route::resource('days', DayController::class);

Route::resource('roles', RoleController::class);

Route::resource('users', UserController::class);

Route::resource('vendors', VendorController::class);

Route::resource('hours', HourController::class);

Route::resource('services', ServiceController::class);

Route::resource('reviews', ReviewController::class);

Route::resource('photos', PhotoController::class);
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
    return view('index');
})->name('home');

// Client id 50117810070-4uiis3ijfemvu09kkkrmcsb5hmn72d8k.apps.googleusercontent.com
// Client secret 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