<?php

use App\Http\Controllers\CompanyHomeController;
use App\Http\Controllers\InsertRecruitmentController;
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
    Route::get('home', [CompanyHomeController::class, 'editrecruitment']);
    Route::get('/training', function() {
        return view('company.Training');
    });
    Route::get('/profile', function() {
        return view('company.CompanyProfile');
    });
    Route::get('/recruitment', [InsertRecruitmentController::class,'insertrecruitment']);
    Route::post('/store', [InsertRecruitmentController::class,'store']);
    Route::get('{id}/edit', [CompanyHomeController::class,'edit']);
    Route::get('history', [CompanyHomeController::class,'history']);
    Route::put('home/{id}/update', [CompanyHomeController::class,'update']);
    Route::put('home/{id}', [CompanyHomeController::class,'close']);
    Route::delete('home/{id}', [CompanyHomeController::class,'delete']);

    // Route::get('/history', function() {
    //     return view('company.history');
    // });
});


// Route::prefix('user')->middleware('auth','isUser')->group(function(){

// });

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
