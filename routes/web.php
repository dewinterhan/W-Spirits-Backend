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
use Gloudemans\Shoppingcart\Facades\Cart;

/**FRONTEND***/
Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', function () {
    return view('contact');
});

//temp
Route::get('empty', function () {
    Cart::destroy();
});

Route::get('/', 'FrontController@productsHome')->name('productsHome');
Route::get('products', 'FrontController@products')->name('products');
Route::get('product/{id}', 'FrontController@productdetails')->name('product');


//CART
Route::get('cart', 'CartController@index')->name('cart.index');
Route::post('addItem', 'CartController@store')->name('cart.store');
Route::delete('cart/{product}', 'CartController@destroy')->name('cart.delete');


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



