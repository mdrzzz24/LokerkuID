<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
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
    Route::get('/', [AdminController::class, 'usermanagement'] );
    Route::get('/jobmanagement', [AdminController::class, 'jobmanagement'] );
    Route::get('/article', [ArticleController::class, 'article'] );
    Route::post('/store', [ArticleController::class,'store']);
    Route::post('/article', [ArticleController::class, 'store']);
    Route::get('/articlemanagement', [ArticleController::class, 'articlemanagement']);
    Route::delete('/{id}', [AdminController::class,'delete']);
    Route::delete('jobmanagement/{id}', [AdminController::class,'deletejob']);
    Route::delete('articlemanagement/{id}', [ArticleController::class,'deletepost']);
});


Route::prefix('company')->middleware('auth','isCom')->group(function(){
    Route::get('home', [CompanyHomeController::class, 'editrecruitment']);
    Route::get('/training', function() {
        return view('company.Training');
    });
    Route::get('/profile', [CompanyHomeController::class,'profile']);
    Route::get('/editcomprofile', [CompanyHomeController::class,'editprofile']);
    Route::get('/changecompanypw', [CompanyHomeController::class,'changepw']);
    Route::put('/changepw/{id}/edit', [CompanyHomeController::class,'storepw']);
    Route::get('/recruitment', [InsertRecruitmentController::class,'insertrecruitment']);
    Route::post('/store', [InsertRecruitmentController::class,'store']);
    Route::post('/training/store', [CompanyHomeController::class,'storetraining']);
    Route::get('/trainingmanagement', [CompanyHomeController::class,'training']);
    Route::get('/trainingmanagement', [CompanyHomeController::class,'trainingmanagement']);
    Route::get('{id}/edit', [CompanyHomeController::class,'edit']);
    Route::get('history', [CompanyHomeController::class,'history']);
    Route::get('article', [CompanyHomeController::class,'article']);
    Route::post('article/store', [CompanyHomeController::class,'store']);
    Route::get('articlemanagement', [CompanyHomeController::class,'articlemanagement']);
    Route::delete('articlemanagement/{id}', [CompanyHomeController::class,'deletearticle']);
    Route::delete('trainingmanagement/{id}', [CompanyHomeController::class,'deletetraining']);
    Route::put('home/{id}/update', [CompanyHomeController::class,'update']);
    Route::put('editprofile/{id}/edit', [CompanyHomeController::class,'updateprofile']);
    Route::put('home/{id}', [CompanyHomeController::class,'close']);
    Route::delete('home/{id}', [CompanyHomeController::class,'delete']);

    // Route::get('/history', function() {
    //     return view('company.history');
    // });
});


// Route::prefix('user')->middleware('auth','isUser')->group(function(){

// });

Route::get('/', [UserController::class, 'show']);
Route::get('/findjob', [UserController::class, 'showjobs']);
Route::get('/search', [UserController::class, 'search']);
Route::get('/training', [UserController::class, 'training']);
Route::get('/detailtraining{id}', [UserController::class, 'detailtraining']);
Route::get('/article', [UserController::class, 'article']);
Route::get('/readarticle/{id}', [UserController::class, 'readarticle']);
Route::get('/about', function () {
    return view('user.about');
});
Route::get('/jobdetail/{id}', [UserController::class, 'detail']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
