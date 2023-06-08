<?php

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\GenreMusikController;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\PenyanyiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MusikController;

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



Route::get('/',[GenreMusikController::class,'index2']);
Route::get('/Penyanyi',[PenyanyiController::class,'index']);
Route::get('/Genre',[GenreController::class,'index']);
Route::get('/GenreMusik',[GenreMusikController::class,'index']);
Route::get('/Label',[LabelController::class,'index']);
Route::get('/home',[GenreMusikController::class,'index']);

Route::get('/User',[UserController::class,'index']);
Route::get('/create',[UserController::class,'create']);
Route::post('/User',[UserController::class,'store']);
Route::get('/edit/{id}',[UserController::class,'edit']);
Route::put('/User/{id}',[UserController::class,'update']);
Route::delete('/User/{id}',[UserController::class,'destroy']);


Route::get('/Musik',[MusikController::class,'index']);


