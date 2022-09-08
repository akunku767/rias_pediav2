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
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestController;

// Testing
Route::resource('test', TestController::class);

// Login with google API
Route::get('auth/google',[AuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback',[AuthController::class, 'handleToGoogleCallback'])->name('google.callback');

// Login static 
Route::post('auth/login',[AuthController::class, 'login'])->name('auth.login');

// Logout session
Route::get('auth/logout',[AuthController::class, 'logout'])->name('auth.logout');

// Admin
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Roles
Route::get('dashboard/roles', [RoleController::class, 'index'])->name('roles.index');
Route::post('dashboard/roles/create',[RoleController::class, 'store'])->name('roles.create');
Route::post('dashboard/roles/{id}/edit',[RoleController::class, 'update'])->name('roles.update');
Route::delete('dashboard/roles/{id}',[RoleController::class, 'destroy'])->name('roles.destroy');

// Users
Route::get('dashboard/users', [UserController::class, 'index'])->name('users.index');
Route::post('dashboard/users/create',[UserController::class, 'store'])->name('users.create');
Route::post('dashboard/users/{id}/edit',[UserController::class, 'update'])->name('users.update');
Route::delete('dashboard/users/{id}',[UserController::class, 'destroy'])->name('users.destroy');

// Vendors
Route::get('dashboard/vendors', [VendorController::class, 'index'])->name('vendors.index');
Route::post('dashboard/vendors/create',[VendorController::class, 'store'])->name('vendors.create');
Route::post('dashboard/vendors/{id}/edit',[VendorController::class, 'update'])->name('vendors.update');
Route::delete('dashboard/vendors/{id}',[VendorController::class, 'destroy'])->name('vendors.destroy');

Route::resource('/', IndexController::class);
Route::resource('days', DayController::class);
Route::resource('hours', HourController::class);
Route::resource('services', ServiceController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('tests', PhotoController::class);
Route::resource('photos', PhotoController::class);
Route::get('/uploads', [TestController::class, 'index'])->name('uploads');
Route::post('/save', [TestController::class, 'store'])->name('uploads.store');

//Dummy
Route::get('/detail-salon', function () {return view('vendor\detailsalon'); });
Route::get('/list-salon', function () {return view('vendor\listsalon'); });
Route::get('/wishlist', function () {return view('wishlist'); });


// Route::get('list-salon', function () {return view('listsalon'); });
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