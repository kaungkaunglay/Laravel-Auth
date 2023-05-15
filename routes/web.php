<?php

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
    return view('welcome');
});

Auth::routes();


Route::group(['prefix'=>'admin','middleware' => 'auth'],function(){
    Route::get('/normal_users', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/users',[App\Http\Controllers\UserController::class,'index']);
    Route::get('/manager',[App\Http\Controllers\ManagerController::class,'index']);
    Route::get('/supervisor',[App\Http\Controllers\SupervisorController::class,'index']);
    Route::get('/staff',[App\Http\Controllers\StaffController::class,'index']);
    Route::get('/roles',[App\Http\Controllers\RoleController::class,'index']);
});