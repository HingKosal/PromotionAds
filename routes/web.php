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
// frontend
Route::get('', 'ProductsController@product');
Route::get('/frontend/about', function () {
    return view('Frontend.page.about');
});
Route::get('/frontend/contact', function () {
    return view('Frontend.page.contact');
});
Route::get('/frontend/detail{id}', 'ProductsController@detail');


Route::get('/dashboard', function () {
    return view('Backend.Dashboard.dashboard1');
});

// category
Route::get('/category', 'CategoriesController@index')->name('category');
Route::get('/category/create', 'CategoriesController@create')->name('category.create');

Route::post('/category/create', 'CategoriesController@store')->name('category.store');
Route::get('/category/edit{id}','CategoriesController@edit')->name('category.edit');
Route::get('/category/update{id}','CategoriesController@update')->name('category.update');
Route::get('/category/delete{id}','CategoriesController@destroy')->name('category.delete');
Route::get('/category/search', 'CategoriesController@search')->name('category.search');
Route::get('/category/show', 'CategoriesController@show')->name('category.show');

// company
Route::get('/company', 'CompaniesController@index')->name('company');
Route::get('/company/create', 'CompaniesController@create')->name('company.create');

Route::post('/company/create', 'CompaniesController@store')->name('company.store');
Route::get('/company/edit{id}','CompaniesController@edit')->name('company.edit');
Route::get('/company/update{id}','CompaniesController@update')->name('company.update');
Route::get('/company/delete{id}','CompaniesController@destroy')->name('company.delete');
Route::get('/company/search', 'CompaniesController@search')->name('company.search');
Route::get('/company/show', 'CompaniesController@show')->name('company.show');

// province
Route::get('/province', 'ProvincesController@index')->name('province');
Route::get('/province/create', 'ProvincesController@create')->name('province.create');

// brand
Route::get('/brand', 'BrandController@index')->name('brand');
Route::get('/brand/create', 'BrandController@create')->name('brand.create');

Route::post('/brand/create', 'BrandController@store')->name('brand.store');
Route::get('/brand/edit{id}','BrandController@edit')->name('brand.edit');
Route::get('/brand/update{id}','BrandController@update')->name('brand.update');
Route::get('/brand/delete{id}','BrandController@destroy')->name('brand.delete');
Route::get('/brand/search', 'BrandController@search')->name('brand.search');
Route::get('/brand/show', 'BrandController@show')->name('brand.show');

// size
Route::get('/size', 'SizesController@index')->name('size');
Route::get('/size/create', 'SizesController@create')->name('size.create');
Route::post('/size/create', 'SizesController@store')->name('size.store');
Route::get('/size/edit{id}','SizesController@edit')->name('size.edit');
Route::get('/size/update{id}','SizesController@update')->name('size.update');
Route::get('/size/delete{id}','SizesController@destroy')->name('size.delete');
Route::get('/size/search', 'SizesController@search')->name('size.search');
Route::get('/size/show', 'SizesController@show')->name('size.show');



// product
Route::get('/product', 'ProductsController@index')->name('product');

Route::get('/product/create', 'ProductsController@create')->name('product.create');
Route::post('/product/create', 'ProductsController@store')->name('product.store');
Route::get('/product/edit{id}', 'ProductsController@edit')->name('product.edit');
Route::get('/product/update{id}', 'ProductsController@update')->name('product.update');
Route::get('/product/show{id}', 'ProductsController@show')->name('product.show');
Route::get('/product/delete{id}', 'ProductsController@destroy')->name('product.delete');
Route::get('/product/search', 'ProductsController@search')->name('product.search');


// user
Route::get('/user', 'UsersController@index')->name('user');
Route::get('/user/create', 'UsersController@create')->name('user.create');
Route::post('/user/create', 'UsersController@store')->name('user.store');
Route::get('/user/edit{id}','UsersController@edit')->name('user.edit');
Route::get('/user/update{id}','UsersController@update')->name('user.update');
Route::get('/user/delete{id}','UsersController@destroy')->name('user.delete');
Route::get('/user/search', 'UsersController@search')->name('user.search');




Auth::routes();

