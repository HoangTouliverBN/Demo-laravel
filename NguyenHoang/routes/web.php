<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\SachController;
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

Route::get('/home',function () {
    return view('frontend.layout.section');
});
Route::get('quanlysach',[SachController::class,'index']);

Route::resource('quanlysach',SachController::class);

//register
Route::get('register',[AuthenticateController::class,'ShowRegister']);
Route::post('register',[AuthenticateController::class,'Register']);

//login
Route::get('/login',[AuthenticateController::class,'ShowLogin']);
Route::post('/login',[AuthenticateController::class,'authenticate']);
Route::get('/logout',[AuthenticateController::class,'logout']);