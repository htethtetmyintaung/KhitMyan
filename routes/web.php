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

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        Route::get(LaravelLocalization::transRoute('routes.home'), function () {
            return view('layouts.frontend');
        }); 
    });



Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function() {
    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index']);

    Route::get('/Maincontents/index',[App\Http\Controllers\Admin\MaincontentsController::class,'index']);
    Route::get('/Maincontents/add-content',[App\Http\Controllers\Admin\MaincontentsController::class,'create']);
    Route::post('/Maincontents/add-content',[App\Http\Controllers\Admin\MaincontentsController::class,'store']);
    Route::get('/Maincontents/edit-content/{content_id}',[App\Http\Controllers\Admin\MaincontentsController::class,'edit']);
    Route::put('/Maincontents/update-content/{content_id}',[App\Http\Controllers\Admin\MaincontentsController::class,'update']);
    Route::get('/Maincontents/delete-content/{content_id}',[App\Http\Controllers\Admin\MaincontentsController::class,'destroy']);

    Route::get('/Home/index',[App\Http\Controllers\Admin\HomeController::class,'index']);
    Route::get('/Home/add-content',[App\Http\Controllers\Admin\HomeController::class,'create']);
    Route::post('/Home/add-content',[App\Http\Controllers\Admin\HomeController::class,'store']);
    Route::get('/Home/edit-content/{content_id}',[App\Http\Controllers\Admin\HomeController::class,'edit']);
    Route::put('/Home/update-content/{content_id}',[App\Http\Controllers\Admin\HomeController::class,'update']);
    Route::get('/Home/delete-content/{content_id}',[App\Http\Controllers\Admin\HomeController::class,'destroy']);

    Route::get('/Aboutus/index',[App\Http\Controllers\Admin\AboutusController::class,'index']);
    Route::get('/Aboutus/add-content',[App\Http\Controllers\Admin\AboutusController::class,'create']);
    Route::post('/Aboutus/add-content',[App\Http\Controllers\Admin\AboutusController::class,'store']);
    Route::get('/Aboutus/edit-content/{content_id}',[App\Http\Controllers\Admin\AboutusController::class,'edit']);
    Route::put('/Aboutus/update-content/{content_id}',[App\Http\Controllers\Admin\AboutusController::class,'update']);
    Route::get('/Aboutus/delete-content/{content_id}',[App\Http\Controllers\Admin\AboutusController::class,'destroy']);

    Route::get('/Contactus/index',[App\Http\Controllers\Admin\ContactusController::class,'index']);
    Route::get('/Contactus/add-content',[App\Http\Controllers\Admin\ContactusController::class,'create']);
    Route::post('/Contactus/add-content',[App\Http\Controllers\Admin\ContactusController::class,'store']);
    Route::get('/Contactus/edit-content/{content_id}',[App\Http\Controllers\Admin\ContactusController::class,'edit']);
    Route::put('/Contactus/update-content/{content_id}',[App\Http\Controllers\Admin\ContactusController::class,'update']);
    Route::get('/Contactus/delete-content/{content_id}',[App\Http\Controllers\Admin\ContactusController::class,'destroy']);

});