<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoController;

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

Route::get('/', [RestoController::class, 'index']);
Route::view('/add', 'add');
Route::post('/store', [RestoController::class, 'store']);
Route::get('edit/{id}', [RestoController::class, 'edit']);
Route::put('/update/{id}', [RestoController::class, 'update']);