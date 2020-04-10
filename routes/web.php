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
//homepage
Route::get('/', 'StaticPagesCategoriesController@home');

// menu static pages
Route::get('/menu', 'StaticPagesController@menu');
Route::get('/menu/{slug}', 'StaticPagesController@singleMenu');
Route::get('/about', 'StaticPagesController@about');
Route::get('/menu', function () {
    return view('menu/index');
});
Route::get('/reservations', 'StaticPagesController@reservations');
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/offers', 'StaticPagesController@offers');

// Admin dashboard
Route::get('/admin', 'admin\AdminController@dashboard');
// admin food categories
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');
Route::get('/admin/food-categories/{id}edit', 'admin\FoodCategoriesController@edit');
// admin users
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');
Route::get('/admin/food-categories/{id}edit', 'admin\FoodCategoriesController@edit');
//food items
Route::get('/admin/users', 'admin\UsersController@index');
Route::get('/admin/users/create', 'admin\UsersController@create');
Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit');
//admin customers
Route::get('/admin/offers-members', 'admin\CustomersController@allOffersMembers');
Route::get('/admin/reservations', 'admin\CustomersController@allReservations');

// admin authentication
Route::get('/admin/register', function () {
    return view('admin/register');
});
Route::get('/admin/login', function () {
    return view('admin/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
