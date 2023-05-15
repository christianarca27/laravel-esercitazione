<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VineController;
use App\Http\Controllers\WineController;
use App\Http\Controllers\WineryController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/wines', [WineController::class, 'index'])->name('wines');

Route::get('/wineries', [WineryController::class, 'index'])->name('wineries');

Route::get('/vines', [VineController::class, 'index'])->name('vines');
