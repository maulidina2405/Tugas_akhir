<?php

use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/penjualan',[PenjualanController::class,'index']);
Route::get('/penjualan/create',[PenjualanController::class,'create']);
Route::post('/penjualan/store',[PenjualanController::class,'store']);
Route::get('/penjualan/{id}/edit',[PenjualanController::class,'edit']);
Route::put('/penjualan/{id}',[PenjualanController::class,'Update']);
Route::delete('/penjualan/{id}',[PenjualanController::class,'destroy']);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
