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

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'login'])->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
Route::get('/admin/tambah', [App\Http\Controllers\HomeController::class, 'lihatAdmin'])->name('lihatAdmin');
Route::post('/admin/simpan', [App\Http\Controllers\HomeController::class, 'tambahAdmin'])->name('tambahAdmin');
Route::get('/admin/lihatAdmin/{id}', [App\Http\Controllers\HomeController::class, 'showAdmin'])->name('showAdmin');
Route::get('/admin/formUpdate/{id}', [App\Http\Controllers\HomeController::class, 'formUpdate'])->name('formUpdate');
Route::post('/admin/updateAdmin', [App\Http\Controllers\HomeController::class, 'updateAdmin'])->name('updateAdmin');
Route::post('/admin/deleteAdmin', [App\Http\Controllers\HomeController::class, 'deleteAdmin'])->name('deleteAdmin');


// -----------------------------login-----------------------------------------
// Route::get('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
// Route::post('/login', 'App\Http\Controllers\Auth\LoginController@authenticate');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// // ------------------------------register---------------------------------------
// Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');
// Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@storeUser')->name('register');

// -----------------------------forget password ------------------------------
Route::get('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@getEmail')->name('forget-password');
Route::post('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@postEmail')->name('forget-password');

Route::get('reset-password/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@getPassword');
Route::post('reset-password', 'App\Http\Controllers\Auth\ResetPasswordController@updatePassword');

// Github login
Route::get('login/github', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('login/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);


// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

// -----------------------------forget password ------------------------------
Route::get('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@getEmail')->name('forget-password');
Route::post('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@postEmail')->name('forget-password');
