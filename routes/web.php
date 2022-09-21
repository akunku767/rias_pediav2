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
use App\Http\Controllers\AboutController;

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

// Admin->Roles
Route::get('dashboard/roles', [RoleController::class, 'index'])->name('roles.index');
Route::post('dashboard/roles/create',[RoleController::class, 'store'])->name('roles.create');
Route::post('dashboard/roles/{id}/edit',[RoleController::class, 'update'])->name('roles.update');
Route::delete('dashboard/roles/{id}',[RoleController::class, 'destroy'])->name('roles.destroy');

// Admin->Users
Route::get('dashboard/users', [UserController::class, 'index'])->name('users.index');
Route::post('dashboard/users/create',[UserController::class, 'store'])->name('users.create');
Route::post('dashboard/users/{id}/edit',[UserController::class, 'update'])->name('users.update');
Route::delete('dashboard/users/{id}',[UserController::class, 'destroy'])->name('users.destroy');

// Admin->Vendors
Route::get('dashboard/vendors', [VendorController::class, 'index'])->name('vendors.index');
Route::post('dashboard/vendors/create',[VendorController::class, 'store'])->name('vendors.create');
Route::post('dashboard/vendors/{id}/edit',[VendorController::class, 'update'])->name('vendors.update');
Route::delete('dashboard/vendors/{id}',[VendorController::class, 'destroy'])->name('vendors.destroy');

// User->Vendors
Route::get('/detail-salon/{slug}', [VendorController::class, 'detail'])->name('vendors.detailsalon');
Route::get('/list-salon', [VendorController::class, 'all'])->name('vendors.listsalon');
Route::get('/list-salon/search', [VendorController::class, 'search'])->name('vendors.searchsalon');
Route::get('/list-salon/popular', [VendorController::class, 'popular'])->name('vendors.popularsalon');
Route::get('/list-salon/latest', [VendorController::class, 'latest'])->name('vendors.latestsalon');


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
Route::get('/wishlist', function () {return view('wishlist'); });
Route::get('/about-us', [AboutController::class, 'index'])->name('aboutus');

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
