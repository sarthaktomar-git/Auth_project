<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome'); 
// });

//Home Controller 
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home');
});

//login controller 
Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login');
    Route::post('login', 'auth_login');  
    Route::get('register', 'register');
    Route::post('register', 'create_user');
    Route::get('verify/{token}', 'verify');
    Route::get('forgot-password', 'forgot');
    Route::post('forgot-password', 'forgot_password');
    Route::get('reset/{token}', 'reset');
    Route::post('reset/{token}', 'post_reset');
});

//Dashboard Controller 
Route::controller(DashboardController::class)->group(function () {
    Route::get('panel/dashboard', 'dashboard');
});

