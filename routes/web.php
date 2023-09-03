<?php

use App\Http\Controllers\CarTypesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\SchedulesController;
use App\Http\Controllers\TrainersController;
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

Route::get('/',[HomeController::class, 'index']);

Route::get('/schedules',[SchedulesController::class, 'index']);

Route::get('/packages', [PackagesController::class,'index']);

Route::get('/trainers', [TrainersController::class,'index']);

Route::get('/car-types', [CarTypesController::class,'index']);
