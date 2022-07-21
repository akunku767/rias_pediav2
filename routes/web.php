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
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\TestController;

// Testing
Route::resource('test', TestController::class);

// Login with google API
Route::get('auth/google',[GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback',[GoogleController::class, 'handleToGoogleCallback'])->name('google.callback');

// Logout session
Route::get('auth/logout',[SessionController::class, 'logout'])->name('session.logout');

// Admin
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Roles
// Route::get('dashboard/roles', function () {
//     return view('admin.roles');
// })->name('dashboard.roles');

Route::resource('dashboard/roles', RoleController::class);


Route::resource('/', IndexController::class);
Route::resource('days', DayController::class);
Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);
Route::resource('vendors', VendorController::class);
Route::resource('hours', HourController::class);
Route::resource('services', ServiceController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('tests', PhotoController::class);
Route::resource('photos', PhotoController::class);
Route::get('/uploads', [TestController::class, 'index'])->name('uploads');
Route::post('/save', [TestController::class, 'store'])->name('uploads.store');
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

// Route::get('/', function () {
//     return view('index');
// })->name('home');

// Client id 50117810070-4uiis3ijfemvu09kkkrmcsb5hmn72d8k.apps.googleusercontent.com
// Client secret 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