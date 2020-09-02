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

Route::get('/', function () {
    return view('pages.index');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home.user');
Route::get('/user/logout', 'UserController@logout')->name('user.logout');
Route::get('user/password', 'UserController@editPassword')->name('password.edit')->middleware('auth');
Route::post('user/password', 'UserController@updatePassword')->name('password.update');

// Admin
Route::get('dashboard', 'Admin\AdminController@index');
Route::get('admin/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\Auth\LoginController@login');
Route::get('admin/logout', 'Admin\AdminController@logout')->name('admin.logout');

Route::get('admin/edit/profile', 'Admin\AdminController@showEdit')->name('admin.edit');
Route::post('admin/updateProfile', 'Admin\AdminController@updateProfile')->name('admin.update.profile');
Route::post('admin/updatePassword', 'Admin\AdminController@updatePassword')->name('admin.password.update');
