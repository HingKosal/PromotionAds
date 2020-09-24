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
Route::get('', function () {
    return view('Frontend.page.index');
});
Route::get('/frontend/about', function () {
    return view('Frontend.page.about');
});
Route::get('/frontend/contact', function () {
    return view('Frontend.page.contact');
});
Route::get('/frontend/detail', function () {
    return view('Frontend.page.detail');
});


Route::get('/dashboard', function () {
    return view('Backend.Dashboard.dashboard1');
});

// category
Route::get('/category', 'CategoriesController@index')->name('category');
Route::get('/category/create', 'CategoriesController@create')->name('category.create');

// company
Route::get('/company', 'CompaniesController@index')->name('company');
Route::get('/company/create', 'CompaniesController@create')->name('company.create');

// province
Route::get('/province', 'ProvincesController@index')->name('province');
Route::get('/province/create', 'ProvincesController@create')->name('province.create');

// branch
Route::get('/branch', 'BranchesController@index')->name('branch');
Route::get('/branch/create', 'BranchesController@create')->name('branch.create');

// size
Route::get('/size', 'SizesController@index')->name('size');
Route::get('/size/create', 'SizesController@create')->name('size.create');

// product
Route::get('/product', 'ProductsController@index')->name('product');
Route::get('/product/create', 'ProductsController@create')->name('product.create');

// user
Route::get('/user', 'UsersController@index')->name('user');
Route::get('/user/create', 'UsersController@create')->name('user.create');
Route::post('/user/create', 'UsersController@store')->name('user.store');
Route::get('/user/edit{id}','UsersController@edit')->name('edit');
Route::get('/user/update{id}','UsersController@update')->name('update');
Route::get('/user/delete{id}','UsersController@destroy')->name('delete');


// auth
Route::get('/register', 'RegisterController@index')->name('register');
Route::get('/register/create', 'RegisterController@create')->name('register.create');
Route::post('/register/create', 'RegisterController@store')->name('register.store');
Route::post('/dashboard', 'RegisterController@dashboard')->name('dashboard');


Route::get('/login', 'LoginController@index')->name('login');
Route::get('/login/create', 'LoginController@create')->name('login.create');
Route::post('/login/create', 'LoginController@store')->name('login.store');
