<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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


Route::get('/',[TodoController::class,'showTodo']);
Route::get('/add',[TodoController::class,'addTodo']);
Route::get('/delete/{sno}',[TodoController::class,'deleteTodo']);
