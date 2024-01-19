<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\RouteGroup;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/index', [NavController::class,'index'])->name('index');
Route::get('/cab', [NavController::class,'cab'])->name('cab');
Route::get('/reg', [NavController::class,'reg'])->name('reg');
Route::get('/app', [NavController::class,'app'])->name('app');


Route::post('/reg', [UserController::class,'reg'])->name('reg');
Route::post('/log', [UserController::class,'log'])->name('log');
Route::get('/logout', [UserController::class,'logout'])->name('logout');
Route::get('/cab', [UserController::class,'getUserApp']);
Route::patch('/cab', [UserController::class,'getApp'])->name('getApp');
// Route::get('/cab', [UserController::class,'info']);

Route::post('/app_create', [AppController::class,'app_create'])->name('app_create');


Route::group(['namespace' => 'admin', 'middleware' => 'admin'], function () {
Route::get('/admin', [NavController::class,'admin'])->name('admin');
Route::get('/admin', [AdminController::class,'admin_status']);
Route::get('/aplication/{id}/change_two', [AdminController::class,'change_two']);
Route::get('/aplication/{id}/change_three', [AdminController::class,'change_three']);
});
