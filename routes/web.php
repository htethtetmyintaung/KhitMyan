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
Route::get('/mission', [App\Http\Controllers\Frontend\FrontEndController::class, 'mission']);
Route::get('/mission/my', [App\Http\Controllers\Frontend\FrontEndController::class, 'mission_my']);
Route::get('/mission/ja', [App\Http\Controllers\Frontend\FrontEndController::class, 'mission_ja']);
Route::get('/vision', [App\Http\Controllers\Frontend\FrontEndController::class, 'vision']);
Route::get('/vision/my', [App\Http\Controllers\Frontend\FrontEndController::class, 'vision_my']);
Route::get('/vision/ja', [App\Http\Controllers\Frontend\FrontEndController::class, 'vision_ja']);
Route::get('/newslist',[App\Http\Controllers\Frontend\FrontEndController::class, 'newslist']);
Route::get('/newslist/my',[App\Http\Controllers\Frontend\FrontEndController::class, 'newslist_my']);
Route::get('/newslist/ja',[App\Http\Controllers\Frontend\FrontEndController::class, 'newslist_ja']);
Route::get('/news/{content_id}',[App\Http\Controllers\Frontend\FrontEndController::class, 'news']);
Route::get('/news/{content_id}/my',[App\Http\Controllers\Frontend\FrontEndController::class, 'news_my']);
Route::get('/news/{content_id}/ja',[App\Http\Controllers\Frontend\FrontEndController::class, 'news_ja']);
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
    Route::delete('/Maincontents/delete-content/{content_id}',[App\Http\Controllers\Admin\MaincontentsController::class,'destroy']);

    Route::get('/Home/index',[App\Http\Controllers\Admin\HomeController::class,'index']);
    Route::get('/Home/add-content',[App\Http\Controllers\Admin\HomeController::class,'create']);
    Route::post('/Home/add-content',[App\Http\Controllers\Admin\HomeController::class,'store']);
    Route::get('/Home/edit-content/{content_id}',[App\Http\Controllers\Admin\HomeController::class,'edit']);
    Route::put('/Home/update-content/{content_id}',[App\Http\Controllers\Admin\HomeController::class,'update']);
    Route::delete('/Home/delete-content/{content_id}',[App\Http\Controllers\Admin\HomeController::class,'destroy']);
    Route::get('/Home/show-content/{content_id}',[App\Http\Controllers\Admin\HomeController::class,'show']);

    Route::get('/Aboutus/index',[App\Http\Controllers\Admin\AboutusController::class,'index']);
    Route::get('/Aboutus/add-content',[App\Http\Controllers\Admin\AboutusController::class,'create']);
    Route::post('/Aboutus/add-content',[App\Http\Controllers\Admin\AboutusController::class,'store']);
    Route::get('/Aboutus/edit-content/{content_id}',[App\Http\Controllers\Admin\AboutusController::class,'edit']);
    Route::put('/Aboutus/update-content/{content_id}',[App\Http\Controllers\Admin\AboutusController::class,'update']);
    Route::delete('/Aboutus/delete-content/{content_id}',[App\Http\Controllers\Admin\AboutusController::class,'destroy']);
    Route::get('/Aboutus/show-content/{content_id}',[App\Http\Controllers\Admin\AboutusController::class,'show']);

    Route::get('/Contactus/index',[App\Http\Controllers\Admin\ContactusController::class,'index']);
    Route::get('/Contactus/add-content',[App\Http\Controllers\Admin\ContactusController::class,'create']);
    Route::post('/Contactus/add-content',[App\Http\Controllers\Admin\ContactusController::class,'store']);
    Route::get('/Contactus/edit-content/{content_id}',[App\Http\Controllers\Admin\ContactusController::class,'edit']);
    Route::put('/Contactus/update-content/{content_id}',[App\Http\Controllers\Admin\ContactusController::class,'update']);
    Route::delete('/Contactus/delete-content/{content_id}',[App\Http\Controllers\Admin\ContactusController::class,'destroy']);
    Route::get('/Contactus/show-content/{content_id}',[App\Http\Controllers\Admin\ContactusController::class,'show']);

    Route::get('/Permissions/index',[App\Http\Controllers\Admin\PermissionController::class,'index']);
    Route::get('/Permissions/add-content',[App\Http\Controllers\Admin\PermissionController::class,'create']);
    Route::post('/Permissions/add-content',[App\Http\Controllers\Admin\PermissionController::class,'store']);
    Route::get('/Permissions/edit-content/{content_id}',[App\Http\Controllers\Admin\PermissionController::class,'edit']);
    Route::put('/Permissions/update-content/{content_id}',[App\Http\Controllers\Admin\PermissionController::class,'update']);
    Route::delete('/Permissions/delete-content/{content_id}',[App\Http\Controllers\Admin\PermissionController::class,'destroy']);
    Route::get('/Permissions/show-content/{content_id}',[App\Http\Controllers\Admin\PermissionController::class,'show']);

    Route::get('/Roles/index',[App\Http\Controllers\Admin\RoleController::class,'index']);
    Route::get('/Roles/add-content',[App\Http\Controllers\Admin\RoleController::class,'create']);
    Route::post('/Roles/add-content',[App\Http\Controllers\Admin\RoleController::class,'store']);
    Route::get('/Roles/edit-content/{content_id}',[App\Http\Controllers\Admin\RoleController::class,'edit']);
    Route::put('/Roles/update-content/{content_id}',[App\Http\Controllers\Admin\RoleController::class,'update']);
    Route::delete('/Roles/delete-content/{content_id}',[App\Http\Controllers\Admin\RoleController::class,'destroy']);
    Route::get('/Roles/show-content/{content_id}',[App\Http\Controllers\Admin\RoleController::class,'show']);

    Route::get('/Users/index',[App\Http\Controllers\Admin\UserController::class,'index']);
    Route::get('/Users/add-content',[App\Http\Controllers\Admin\UserController::class,'create']);
    Route::post('/Users/add-content',[App\Http\Controllers\Admin\UserController::class,'store']);
    Route::get('/Users/edit-content/{content_id}',[App\Http\Controllers\Admin\UserController::class,'edit']);
    Route::put('/Users/update-content/{content_id}',[App\Http\Controllers\Admin\UserController::class,'update']);
    Route::delete('/Users/delete-content/{content_id}',[App\Http\Controllers\Admin\UserController::class,'destroy']);
    Route::get('/Users/show-content/{content_id}',[App\Http\Controllers\Admin\UserController::class,'show']);
    
    Route::get('/Galleries/index',[App\Http\Controllers\Admin\GalleriesController::class,'index']);
    Route::get('/Galleries/add-content',[App\Http\Controllers\Admin\GalleriesController::class,'create']);
    Route::post('/Galleries/add-content',[App\Http\Controllers\Admin\GalleriesController::class,'store']);
    Route::get('/Galleries/edit-content/{content_id}',[App\Http\Controllers\Admin\GalleriesController::class,'edit']);
    Route::put('/Galleries/update-content/{content_id}',[App\Http\Controllers\Admin\GalleriesController::class,'update']);
    Route::delete('/Galleries/delete-content/{content_id}',[App\Http\Controllers\Admin\GalleriesController::class,'destroy']);
    Route::get('/Galleries/show-content/{content_id}',[App\Http\Controllers\Admin\GalleriesController::class,'show']);

    Route::get('/Maingalleries/index',[App\Http\Controllers\Admin\MainGalleriesController::class,'index']);
    Route::get('/Maingalleries/add-content',[App\Http\Controllers\Admin\MainGalleriesController::class,'create']);
    Route::post('/Maingalleries/add-content',[App\Http\Controllers\Admin\MainGalleriesController::class,'store']);
    Route::get('/Maingalleries/edit-content/{content_id}',[App\Http\Controllers\Admin\MainGalleriesController::class,'edit']);
    Route::put('/Maingalleries/update-content/{content_id}',[App\Http\Controllers\Admin\MainGalleriesController::class,'update']);
    Route::delete('/Maingalleries/delete-content/{content_id}',[App\Http\Controllers\Admin\MainGalleriesController::class,'destroy']);
    Route::get('/Maingalleries/show-content/{content_id}',[App\Http\Controllers\Admin\MainGalleriesController::class,'show']);

    Route::get('/Subgalleries/index',[App\Http\Controllers\Admin\SubGalleriesController::class,'index']);
    Route::get('/Subgalleries/add-content',[App\Http\Controllers\Admin\SubGalleriesController::class,'create']);
    Route::post('/Subgalleries/add-content',[App\Http\Controllers\Admin\SubGalleriesController::class,'store']);
    Route::get('/Subgalleries/edit-content/{content_id}',[App\Http\Controllers\Admin\SubGalleriesController::class,'edit']);
    Route::put('/Subgalleries/update-content/{content_id}',[App\Http\Controllers\Admin\SubGalleriesController::class,'update']);
    Route::delete('/Subgalleries/delete-content/{content_id}',[App\Http\Controllers\Admin\SubGalleriesController::class,'destroy']);
    Route::get('/Subgalleries/show-content/{content_id}',[App\Http\Controllers\Admin\SubGalleriesController::class,'show']);

    Route::get('/Services/index',[App\Http\Controllers\Admin\ServiceController::class,'index']);
    Route::get('/Services/add-content',[App\Http\Controllers\Admin\ServiceController::class,'create']);
    Route::post('/Services/add-content',[App\Http\Controllers\Admin\ServiceController::class,'store']);
    Route::get('/Services/edit-content/{content_id}',[App\Http\Controllers\Admin\ServiceController::class,'edit']);
    Route::put('/Services/update-content/{content_id}',[App\Http\Controllers\Admin\ServiceController::class,'update']);
    Route::delete('/Services/delete-content/{content_id}',[App\Http\Controllers\Admin\ServiceController::class,'destroy']);
    Route::get('/Services/show-content/{content_id}',[App\Http\Controllers\Admin\ServiceController::class,'show']);

    Route::get('/Mission/index',[App\Http\Controllers\Admin\MissionController::class,'index']);
    Route::get('/Mission/add-content',[App\Http\Controllers\Admin\MissionController::class,'create']);
    Route::post('/Mission/add-content',[App\Http\Controllers\Admin\MissionController::class,'store']);
    Route::get('/Mission/edit-content/{content_id}',[App\Http\Controllers\Admin\MissionController::class,'edit']);
    Route::put('/Mission/update-content/{content_id}',[App\Http\Controllers\Admin\MissionController::class,'update']);
    Route::delete('/Mission/delete-content/{content_id}',[App\Http\Controllers\Admin\MissionController::class,'destroy']);
    Route::get('/Mission/show-content/{content_id}',[App\Http\Controllers\Admin\MissionController::class,'show']);

    Route::get('/Vision/index',[App\Http\Controllers\Admin\VisionController::class,'index']);
    Route::get('/Vision/add-content',[App\Http\Controllers\Admin\VisionController::class,'create']);
    Route::post('/Vision/add-content',[App\Http\Controllers\Admin\VisionController::class,'store']);
    Route::get('/Vision/edit-content/{content_id}',[App\Http\Controllers\Admin\VisionController::class,'edit']);
    Route::put('/Vision/update-content/{content_id}',[App\Http\Controllers\Admin\VisionController::class,'update']);
    Route::delete('/Vision/delete-content/{content_id}',[App\Http\Controllers\Admin\VisionController::class,'destroy']);
    Route::get('/Vision/show-content/{content_id}',[App\Http\Controllers\Admin\VisionController::class,'show']);

    Route::get('/Client/index',[App\Http\Controllers\Admin\ClientController::class,'index']);
    Route::get('/Client/add-content',[App\Http\Controllers\Admin\ClientController::class,'create']);
    Route::post('/Client/add-content',[App\Http\Controllers\Admin\ClientController::class,'store']);
    Route::get('/Client/edit-content/{content_id}',[App\Http\Controllers\Admin\ClientController::class,'edit']);
    Route::put('/Client/update-content/{content_id}',[App\Http\Controllers\Admin\ClientController::class,'update']);
    Route::delete('/Client/delete-content/{content_id}',[App\Http\Controllers\Admin\ClientController::class,'destroy']);
    Route::get('/Client/show-content/{content_id}',[App\Http\Controllers\Admin\ClientController::class,'show']);

    Route::get('/Category/index',[App\Http\Controllers\Admin\CategoryController::class,'index']);
    Route::get('/Category/add-content',[App\Http\Controllers\Admin\CategoryController::class,'create']);
    Route::post('/Category/add-content',[App\Http\Controllers\Admin\CategoryController::class,'store']);
    Route::get('/Category/edit-content/{content_id}',[App\Http\Controllers\Admin\CategoryController::class,'edit']);
    Route::put('/Category/update-content/{content_id}',[App\Http\Controllers\Admin\CategoryController::class,'update']);
    Route::delete('/Category/delete-content/{content_id}',[App\Http\Controllers\Admin\CategoryController::class,'destroy']);

    Route::get('/News/index',[App\Http\Controllers\Admin\NewsController::class,'index']);
    Route::get('/News/add-content',[App\Http\Controllers\Admin\NewsController::class,'create']);
    Route::post('/News/add-content',[App\Http\Controllers\Admin\NewsController::class,'store']);
    Route::get('/News/edit-content/{content_id}',[App\Http\Controllers\Admin\NewsController::class,'edit']);
    Route::put('/News/update-content/{content_id}',[App\Http\Controllers\Admin\NewsController::class,'update']);
    Route::delete('/News/delete-content/{content_id}',[App\Http\Controllers\Admin\NewsController::class,'destroy']);
    Route::get('/News/show-content/{content_id}',[App\Http\Controllers\Admin\NewsController::class,'show']);

    Route::get('/NewsItem/index',[App\Http\Controllers\Admin\NewsItemController::class,'index']);
    Route::get('/NewsItem/add-content',[App\Http\Controllers\Admin\NewsItemController::class,'create']);
    Route::post('/NewsItem/add-content',[App\Http\Controllers\Admin\NewsItemController::class,'store']);
    Route::get('/NewsItem/edit-content/{content_id}',[App\Http\Controllers\Admin\NewsItemController::class,'edit']);
    Route::put('/NewsItem/update-content/{content_id}',[App\Http\Controllers\Admin\NewsItemController::class,'update']);
    Route::delete('/NewsItem/delete-content/{content_id}',[App\Http\Controllers\Admin\NewsItemController::class,'destroy']);
    Route::get('/NewsItem/show-content/{content_id}',[App\Http\Controllers\Admin\NewsItemController::class,'show']);
});
