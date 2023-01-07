<?php

use Illuminate\Support\Facades\Auth;
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
    return view('user.index');
});
// Route::get('/findjob', function () {
//     return view('findjob');
// });
// Route::get('/training', function () {
//     return view('training');
// });
// Route::get('/article', function () {
//     return view('article');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/jobdetail', function () {
//     return view('jobdetail');
// });

Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('/', function() {
        return view('admin.AdminIndex');
    });
});
Route::prefix('company')->middleware('auth','isCom')->group(function(){
    Route::get('/', function() {
        return view('company.CompanyIndex');
    });
});
Route::prefix('user')->middleware('auth','isUser')->group(function(){
    Route::get('/', function() {
        return view('user.index');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
