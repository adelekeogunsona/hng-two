<?php

use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('', [PersonController::class, 'create']);
Route::get('', [PersonController::class, 'dynamic_read']);
Route::delete('', [PersonController::class, 'dynamic_delete']);
Route::get('{person}', [PersonController::class, 'read']);
Route::put('{person}', [PersonController::class, 'update']);
Route::delete('{person}', [PersonController::class, 'delete']);
