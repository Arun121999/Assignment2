<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes(['verify' => true]);
Route::get('/doctor/register', [App\Http\Controllers\DoctorController::class, 'register'])->name('doctor.register');
Route::get('/consumer/register', [App\Http\Controllers\ConsumerController::class, 'register'])->name('consumer.register');
Route::post('/cities', [App\Http\Controllers\DoctorController::class, 'getCities'])->name('get-cities');



/*-------SuperAdmin---------*/
Route::group(['middleware' => 'auth','can:is_admin'], function () {
    Route::get('/superadmin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('superadmin.dashboard');
    Route::post('/doctor/update-status', [App\Http\Controllers\HomeController::class, 'updateStatus'])->name('doctor.updateStatus');
});

/*-------Doctor---------*/
Route::group(['middleware' => ['auth','verified']], function () {
    Route::get('/doctor/dashboard', [App\Http\Controllers\DoctorController::class, 'dashboard'])->name('doctor.dashboard');
    Route::get('/doctor/profile', [App\Http\Controllers\DoctorController::class, 'profile'])->name('doctor.profile');
});

/*-------Consumer---------*/
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/consumer/dashboard', [App\Http\Controllers\ConsumerController::class, 'dashboard'])->name('consumer.dashboard');
});

