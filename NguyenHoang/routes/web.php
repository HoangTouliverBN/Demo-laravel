<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\SachController;
use App\Http\Controllers\WebController;
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

// WEB
Route::get('/home',[WebController::class, 'all']);
Route::get('home/detail/{detail}',[WebController::class,'ShowDetail']);
Route::get('home/{theloai}',[WebController::class,'ShowAll']);


    // Search
Route::post('/home/search',[WebController::class, 'Search']);
Route::get('/home/search/{search}',[WebController::class, 'ValueSearch']);


// login-register
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
