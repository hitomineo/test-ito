<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestsController;
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



Route::get('/', [TestsController::class, 'index']);


Route::post('/confirm',[TestsController::class, 'confirm']);

Route::get('/complete', [TestsController::class, 'complete']);