<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\PostController;
use App\Http\Controllers\Client\AboutController;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;

Route::get("/", [HomeController::class, "index"]);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/post', [PostController::class, 'index'])->name('post');
Route::get('/post/{id}', [PostController::class, 'show'])->name('post-show');
Route::post('/tim', [PostController::class, 'tim']) -> name('tim');
Route::get('/cate/{id}', [PostController::class, 'catePosts'])->name('cate');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::put('/profile/{user}', [HomeController::class, 'profileEdit'])->name('profile.edit');



Route::middleware('guest')->group(function () {
    // Đăng nhập
    Route::get('auth/login', [LoginController::class, 'showLogInFrom'])->name('login');
    Route::post('auth/login', [LoginController::class, 'logIn']);
    Route::get('auth/veryemail/{id}' ,[LoginController::class, 'veryEmail']) -> name('very') ;
    // Đăng ký
    Route::get('auth/register', [RegisterController::class, 'showRegisterForm'])->name('register');
    Route::post('auth/register', [RegisterController::class, 'Register']);
    // Quên mật khẩu ? và Đặt lại
    Route::get('password/forgot', [ForgotPasswordController::class, 'ShowFromForgot'])->name('forgot');
    Route::post('password/forgot', [ForgotPasswordController::class, 'SendEmailPasss']);
    // reset mật khẩu
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm']) -> middleware(['rs.token']) ->name('password.reset');
    Route::post('password/update', [ResetPasswordController::class, 'reset']) ->name('password.update');
});
Route::post('auth/logout', [LoginController::class, 'logOut'])->name('logout');


