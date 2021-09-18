<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SachController;
use App\Http\Controllers\TheLoaiSachController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



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

//admin
Route::middleware(['auth','phanquyen'])->group(function () {
    Route::get('quanlysach', [SachController::class, 'index']);
    // quản lý sách
Route::resource('quanlysach', SachController::class);

// quản lý thể loại
Route::resource('quanlytheloai', TheLoaiSachController::class);

// quản ly đơn đăng ký
Route::post('quanlyorder/state/{id}',[OrderController::class,'updateState']);

Route::resource('quanlyorder', OrderController::class);



// Route::resource('quanlyuser', UserController::class);

});
Route::middleware(['auth', 'master'])->group(function () {
    Route::get('register-admin', [AuthenticateController::class, 'ShowRegisterAdmin']);
    Route::post('register-admin', [AuthenticateController::class, 'RegisterAdmin']);
});
