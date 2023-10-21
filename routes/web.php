<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BelajarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuratmasukController;
use App\Http\Controllers\SuratkeluarController;

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

Route::get('/',[BelajarController::class,'index']);
Route::get('/home',[HomeController::class,'index']);
Route::resource('suratmasuks',SuratmasukController::class);
Route::resource('suratkeluars',SuratkeluarController::class);
Route::get('suratmasukimport',[SuratmasukController::class,'import']);
Route::get('suratkeluarimport',[SuratkeluarController::class,'import']);
Route::post('suratmasukimportproses',[SuratmasukController::class,'importproses']);
Route::post('suratkeluarimportproses',[SuratkeluarController::class,'importproses']);
Route::get('suratmasukpdf',[SuratmasukController::class,'exportpdf']);
Route::get('suratkeluarpdf',[SuratkeluarController::class,'exportpdf']);