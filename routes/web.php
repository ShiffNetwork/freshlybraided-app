<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HairstyleController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[IndexController::class, 'index']);
Route::resource('appointment', AppointmentController::class);
Route::resource('hairtyle', HairstyleController::class);
