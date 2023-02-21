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

Route::get('/', [App\Http\Controllers\Frontend\FrontEndController::class, 'english']);
Route::get('/my', [App\Http\Controllers\Frontend\FrontEndController::class, 'myanmar']);
Route::get('/ja', [App\Http\Controllers\Frontend\FrontEndController::class, 'japan']);
Route::get('/about', [App\Http\Controllers\Frontend\FrontEndController::class, 'about']);
Route::get('/about/my', [App\Http\Controllers\Frontend\FrontEndController::class, 'about_my']);
Route::get('/about/ja', [App\Http\Controllers\Frontend\FrontEndController::class, 'about_ja']);
Route::get('/gallery/{content_id}', [App\Http\Controllers\Frontend\FrontEndController::class, 'gallery']);
Route::get('/gallery/{content_id}/my', [App\Http\Controllers\Frontend\FrontEndController::class, 'gallery_my']);
Route::get('/gallery/{content_id}/ja', [App\Http\Controllers\Frontend\FrontEndController::class, 'gallery_ja']);


Route::prefix('admin')->middleware(['auth'])->group(function() {
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
    Route::get('/Home/show-content/{content_id}',[App\Http\Controllers\Admin\HomeController::class,'show']);

    Route::get('/Aboutus/index',[App\Http\Controllers\Admin\AboutusController::class,'index']);
    Route::get('/Aboutus/add-content',[App\Http\Controllers\Admin\AboutusController::class,'create']);
    Route::post('/Aboutus/add-content',[App\Http\Controllers\Admin\AboutusController::class,'store']);
    Route::get('/Aboutus/edit-content/{content_id}',[App\Http\Controllers\Admin\AboutusController::class,'edit']);
    Route::put('/Aboutus/update-content/{content_id}',[App\Http\Controllers\Admin\AboutusController::class,'update']);
    Route::get('/Aboutus/delete-content/{content_id}',[App\Http\Controllers\Admin\AboutusController::class,'destroy']);
    Route::get('/Aboutus/show-content/{content_id}',[App\Http\Controllers\Admin\AboutusController::class,'show']);

    Route::get('/Contactus/index',[App\Http\Controllers\Admin\ContactusController::class,'index']);
    Route::get('/Contactus/add-content',[App\Http\Controllers\Admin\ContactusController::class,'create']);
    Route::post('/Contactus/add-content',[App\Http\Controllers\Admin\ContactusController::class,'store']);
    Route::get('/Contactus/edit-content/{content_id}',[App\Http\Controllers\Admin\ContactusController::class,'edit']);
    Route::put('/Contactus/update-content/{content_id}',[App\Http\Controllers\Admin\ContactusController::class,'update']);
    Route::get('/Contactus/delete-content/{content_id}',[App\Http\Controllers\Admin\ContactusController::class,'destroy']);
    Route::get('/Contactus/show-content/{content_id}',[App\Http\Controllers\Admin\ContactusController::class,'show']);

    Route::get('/Permissions/index',[App\Http\Controllers\Admin\PermissionController::class,'index']);
    Route::get('/Permissions/add-content',[App\Http\Controllers\Admin\PermissionController::class,'create']);
    Route::post('/Permissions/add-content',[App\Http\Controllers\Admin\PermissionController::class,'store']);
    Route::get('/Permissions/edit-content/{content_id}',[App\Http\Controllers\Admin\PermissionController::class,'edit']);
    Route::put('/Permissions/update-content/{content_id}',[App\Http\Controllers\Admin\PermissionController::class,'update']);
    Route::get('/Permissions/delete-content/{content_id}',[App\Http\Controllers\Admin\PermissionController::class,'destroy']);
    Route::get('/Permissions/show-content/{content_id}',[App\Http\Controllers\Admin\PermissionController::class,'show']);

    Route::get('/Roles/index',[App\Http\Controllers\Admin\RoleController::class,'index']);
    Route::get('/Roles/add-content',[App\Http\Controllers\Admin\RoleController::class,'create']);
    Route::post('/Roles/add-content',[App\Http\Controllers\Admin\RoleController::class,'store']);
    Route::get('/Roles/edit-content/{content_id}',[App\Http\Controllers\Admin\RoleController::class,'edit']);
    Route::put('/Roles/update-content/{content_id}',[App\Http\Controllers\Admin\RoleController::class,'update']);
    Route::get('/Roles/delete-content/{content_id}',[App\Http\Controllers\Admin\RoleController::class,'destroy']);
    Route::get('/Roles/show-content/{content_id}',[App\Http\Controllers\Admin\RoleController::class,'show']);

    Route::get('/Users/index',[App\Http\Controllers\Admin\UserController::class,'index']);
    Route::get('/Users/add-content',[App\Http\Controllers\Admin\UserController::class,'create']);
    Route::post('/Users/add-content',[App\Http\Controllers\Admin\UserController::class,'store']);
    Route::get('/Users/edit-content/{content_id}',[App\Http\Controllers\Admin\UserController::class,'edit']);
    Route::put('/Users/update-content/{content_id}',[App\Http\Controllers\Admin\UserController::class,'update']);
    Route::get('/Users/delete-content/{content_id}',[App\Http\Controllers\Admin\UserController::class,'destroy']);
    Route::get('/Users/show-content/{content_id}',[App\Http\Controllers\Admin\UserController::class,'show']);
    
    Route::get('/Galleries/index',[App\Http\Controllers\Admin\GalleriesController::class,'index']);
    Route::get('/Galleries/add-content',[App\Http\Controllers\Admin\GalleriesController::class,'create']);
    Route::post('/Galleries/add-content',[App\Http\Controllers\Admin\GalleriesController::class,'store']);
    Route::get('/Galleries/edit-content/{content_id}',[App\Http\Controllers\Admin\GalleriesController::class,'edit']);
    Route::put('/Galleries/update-content/{content_id}',[App\Http\Controllers\Admin\GalleriesController::class,'update']);
    Route::get('/Galleries/delete-content/{content_id}',[App\Http\Controllers\Admin\GalleriesController::class,'destroy']);
    Route::get('/Galleries/show-content/{content_id}',[App\Http\Controllers\Admin\GalleriesController::class,'show']);

    Route::get('/Maingalleries/index',[App\Http\Controllers\Admin\MainGalleriesController::class,'index']);
    Route::get('/Maingalleries/add-content',[App\Http\Controllers\Admin\MainGalleriesController::class,'create']);
    Route::post('/Maingalleries/add-content',[App\Http\Controllers\Admin\MainGalleriesController::class,'store']);
    Route::get('/Maingalleries/edit-content/{content_id}',[App\Http\Controllers\Admin\MainGalleriesController::class,'edit']);
    Route::put('/Maingalleries/update-content/{content_id}',[App\Http\Controllers\Admin\MainGalleriesController::class,'update']);
    Route::get('/Maingalleries/delete-content/{content_id}',[App\Http\Controllers\Admin\MainGalleriesController::class,'destroy']);
    Route::get('/Maingalleries/show-content/{content_id}',[App\Http\Controllers\Admin\MainGalleriesController::class,'show']);

    Route::get('/Subgalleries/index',[App\Http\Controllers\Admin\SubGalleriesController::class,'index']);
    Route::get('/Subgalleries/add-content',[App\Http\Controllers\Admin\SubGalleriesController::class,'create']);
    Route::post('/Subgalleries/add-content',[App\Http\Controllers\Admin\SubGalleriesController::class,'store']);
    Route::get('/Subgalleries/edit-content/{content_id}',[App\Http\Controllers\Admin\SubGalleriesController::class,'edit']);
    Route::put('/Subgalleries/update-content/{content_id}',[App\Http\Controllers\Admin\SubGalleriesController::class,'update']);
    Route::get('/Subgalleries/delete-content/{content_id}',[App\Http\Controllers\Admin\SubGalleriesController::class,'destroy']);
    Route::get('/Subgalleries/show-content/{content_id}',[App\Http\Controllers\Admin\SubGalleriesController::class,'show']);
});