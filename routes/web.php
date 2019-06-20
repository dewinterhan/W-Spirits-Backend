<?php

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

/**FRONTEND***/
Route::get('/', function () {
    return view('welcome');
});



Auth::routes();


/***BACKEND ROUTES***/
Route::group(['middleware'=>'admin'],function(){
    Route::get('/admin','HomeController@index');
    Route::resource('/admin/users','AdminUsersController');
    Route::resource('admin/create_user', 'AdminUsersController@create');
    Route::resource('/admin/categories','AdminCategoriesController');
    Route::resource('/admin/volumes','AdminVolumesController');
    Route::resource('/admin/brands','AdminBrandsController');
    Route::resource('/admin/regions','AdminRegionsController');
});



