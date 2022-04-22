<?php

use App\Http\Controllers\Student_profile;
use App\Http\Controllers\UserAuthController;
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

Route::get('/registration',[\App\Http\Controllers\UserAuthController::class,'registration']) ->name('registration');
Route::post('/registration',[\App\Http\Controllers\UserAuthController::class,'submit_res'])->name('submit.res');

Route::get('/',[\App\Http\Controllers\UserAuthController::class,'login'])->name('login');
Route::post('/',[\App\Http\Controllers\UserAuthController::class,'login_submit'])->name('submit.login');

Route::get('/logout',[\App\Http\Controllers\UserAuthController::class,'logout']);



    //..student profile..
Route::group(['middleware' => 'UserCheck'], function() {
    Route::get('/student/profile',[Student_profile::class,'index'])->name('student.profile');
    Route::post('submit/student',[Student_profile::class,'student_profile'])->name('submit.student');
    Route::get('dashboard',[\App\Http\Controllers\UserAuthController::class,'dashboard'])->name('dashboard');
});








Route::get('/forget-password',[UserAuthController::class,'forget_pass'])->name('show.forget.pas');
Route::post('submit/forget-password',[UserAuthController::class,'forget_pass_function'])->name('submit.email.forget_password');
Route::get('/reset/password/{email}/{token}',[UserAuthController::class,'show_reset_password']);
Route::post('/reset/password/',[UserAuthController::class,'update_password'])->name('update_password');
