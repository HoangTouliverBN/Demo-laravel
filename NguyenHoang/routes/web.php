<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\SachController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('frontend.layout.section');
});

Route::middleware(['checklogin'])->group(function () {
        //register
Route::get('register', [AuthenticateController::class, 'ShowRegister']);
Route::post('register', [AuthenticateController::class, 'Register']);

//login
Route::get('/login', [AuthenticateController::class, 'ShowLogin'])->name('login');
Route::post('/login', [AuthenticateController::class, 'authenticate']);

});
Route::get('/logout', [AuthenticateController::class, 'logout']);



//admin
Route::middleware(['auth','phanquyen'])->group(function () {
    Route::get('quanlysach', [SachController::class, 'index']);
Route::resource('quanlysach', SachController::class);
});
Route::middleware(['auth', 'master'])->group(function () {
    Route::get('register-admin', [AuthenticateController::class, 'ShowRegisterAdmin']);
    Route::post('register-admin', [AuthenticateController::class, 'RegisterAdmin']);
});
