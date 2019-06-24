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
Route::get('contact', function () {
    return view('contact');
});
Route::get('shoppingcart', function () {
    return view('shoppingcart');
});

Route::get('products', 'FrontController@products')->name('products');
Route::get('product/{id}', 'FrontController@productdetails')->name('product');


//CART
Route::get('addCart/{id}', 'FrontController@addItemToCart')->name('addToCart');
Route::get('removeCart/{id}', 'FrontController@removeItemFromCart')->name('removeFromCart');

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
    Route::resource('/admin/products','AdminProductsController');
});



