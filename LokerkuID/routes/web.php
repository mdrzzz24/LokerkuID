<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('user.index');
});


Route::get('/compregist', function () {
    return view('companyregist');
});


Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('/', function() {
        return view('admin.AdminIndex');
    });
});


Route::prefix('company')->middleware('auth','isCom')->group(function(){
    Route::get('home', function() {
        return view('company.CompanyIndex');
    });
    Route::get('/training', function() {
        return view('company.Training');
    });
    Route::get('/profile', function() {
        return view('company.CompanyProfile');
    });
    Route::get('/recruitment', function() {
        return view('company.Recruitment');
    });
    Route::get('/history', function() {
        return view('company.history');
    });
});


Route::prefix('user')->middleware('auth','isUser')->group(function(){
    Route::get('/', function() {
        return view('user.index');
    });
    Route::get('/findjob', [UserController::class, 'showjobs']);
    Route::get('/training', function () {
        return view('user.training');
    });
    Route::get('/article', function () {
        return view('user.article');
    });
    Route::get('/about', function () {
        return view('user.about');
    });
    Route::get('/jobdetail', function () {
        return view('user.jobdetail');
    });
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
