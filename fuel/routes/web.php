<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CombustivelController;

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

Route::get('/', 'App\Http\Controllers\CombustivelController@index');
Route::get('/gasto', 'App\Http\Controllers\CombustivelController@gasto');

// Route::resource('/', App\Http\Controllers\CombustivelController::class)->only(['index']);
// Route::resource('/gasto', App\Http\Controllers\CombustivelController::class)->only(['gasto']);
