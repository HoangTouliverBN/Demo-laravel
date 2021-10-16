<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\financialController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\resetPasswordController;
use App\Http\Controllers\SachController;
use App\Http\Controllers\shoppingCartController;
use App\Http\Controllers\UserInformationController;
use App\Http\Controllers\WebController;
use App\Mail\EmailSent;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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


// WEB
Route::get('/', [WebController::class, 'all']);
Route::get('/home', [WebController::class, 'all']);
Route::get('home/detail/{detail}', [WebController::class, 'ShowDetail']);
Route::get('home/{theloai}', [WebController::class, 'ShowAll']);


// Search
Route::post('/home/search', [WebController::class, 'Search']);
Route::get('/home/search/{search}', [WebController::class, 'ValueSearch']);






// login-register
Route::middleware(['checklogin'])->group(function () {
    //register
    Route::get('register', [AuthenticateController::class, 'ShowRegister']);
    Route::post('register', [AuthenticateController::class, 'Register']);

    //login
    Route::get('/login', [AuthenticateController::class, 'ShowLogin'])->name('login');
    Route::post('/login', [AuthenticateController::class, 'authenticate']);

    // reset password
    Route::get('password/forget', [resetPasswordController::class, 'ShowEmailRequest']);
    Route::post('password/forget', [resetPasswordController::class, 'emailRequest']);
    Route::get('password/reset/{token}', [resetPasswordController::class, 'showResetPassword']);
    Route::post('password/reset/{token}', [AuthenticateController::class, 'resetPassword']);
});
Route::get('/logout', [AuthenticateController::class, 'logout']);



Route::middleware(['auth'])->group(function () {
    Route::get('user-information', [UserInformationController::class, 'UserInformartion']);
    Route::get('update-information', [UserInformationController::class, 'ShowFormInformation']);
    Route::post('update-information', [UserInformationController::class, 'UpdateInformation']);

    // shopping cart
    Route::get('/shoppingCart/cart', [shoppingCartController::class, 'shoppingCart']);
    Route::get('/addIntoShoppingCart/{sach_id}', [shoppingCartController::class, 'addProduct']);
    Route::get('shoppingCart/delete/{id}', [shoppingCartController::class, 'destroy']);;
    Route::post('shoppingCart/pay', [financialController::class, 'pay']);

    // order
    Route::middleware(['auth', 'check_infor'])->group(function () {
        Route::get('order',[OrderController::class,'showOrder']);
        Route::post('order', [OrderController::class, 'Order']);
    });

    // Change Password
    Route::get('changePassword', [AuthenticateController::class, 'ShowChangePassword']);
    Route::post('changePassword', [AuthenticateController::class, 'ChangePassword']);
});

// user_information
