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

Route::get('/home', 'HomeController@index');
Route::get('/user/logout', 'UserController@logout')->name('user.logout');

// Admin
Route::get('admin/home', 'Admin\AdminController@index');
Route::get('admin', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\Auth\LoginController@login');
Route::get('admin/logout', 'Admin\AdminController@logout')->name('admin.logout');

Route::get('admin/edit/profile', 'Admin\AdminController@showEdit')->name('admin.edit');
Route::post('admin/updateProfile', 'Admin\AdminController@updateProfile')->name('admin.update.profile');
Route::post('admin/updatePassword', 'Admin\AdminController@updatePassword')->name('admin.password.update');
