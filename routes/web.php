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

Route::get('', function () {
    return view('Backend.Dashboard.dashboard1');
});

// category
Route::get('/category', 'CategoriesController@index')->name('category');
Route::get('/category/create', 'CategoriesController@create')->name('category.create');;

// company
Route::get('/company', 'CompaniesController@index')->name('company');;
Route::get('/company/create', 'CompaniesController@create')->name('company.create');;

// province
Route::get('/province', 'ProvincesController@index')->name('province');;
Route::get('/province/create', 'ProvincesController@create')->name('province.create');;

// branch
Route::get('/branch', 'BranchesController@index')->name('branch');;
Route::get('/branch/create', 'BranchesController@create')->name('branch.create');;

// size
Route::get('/size', 'SizesController@index')->name('size');;
Route::get('/size/create', 'SizesController@create')->name('size.create');;

// product
Route::get('/product', 'ProductsController@index')->name('product');;
Route::get('/product/create', 'ProductsController@create')->name('product.create');;

// user
Route::get('/user', 'UsersController@index')->name('user');;
Route::get('/user/create', 'UsersController@create')->name('user.create');;



// frontend
Route::get('/home/frontend', function () {
    return view('Frontend.page.index');
});
Route::get('/home/frontend/about', function () {
    return view('Frontend.page.about');
});
Route::get('/home/frontend/contact', function () {
    return view('Frontend.page.contact');
});
Route::get('/home/frontend/detail', function () {
    return view('Frontend.page.detail');
});
