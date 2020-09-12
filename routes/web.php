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

// User
Route::get('/home', 'HomeController@index')->name('home.user');
Route::get('/user/logout', 'UserController@logout')->name('user.logout');
// Ubah Password User
Route::get('user/password', 'UserController@editPassword')->name('password.edit')->middleware('auth');
Route::post('user/password', 'UserController@updatePassword')->name('password.update');
// Ubah profile User
Route::get('user/edit/profile', 'UserController@editProfile')->name('userProfile.edit')->middleware('auth');
Route::post('user/update/profile', 'UserController@updateProfile')->name('userProfile.update')->middleware('auth');

// Ubah penyewaan User
Route::get('user/edit/sewa', 'UserSewaController@editSewa')->name('userSewa.edit');
Route::get('user/sewa/peminjaman', 'UserSewaController@peminjaman')->name('userSewa.peminjaman');
Route::get('user/sewa/pengembalian', 'UserSewaController@pengembalian')->name('userSewa.pengembalian');
Route::get('user/invoice/peminjaman/{id}/{sewaId}', 'UserSewaController@invoicePeminjaman')->name('invoice.peminjaman');
Route::get('user/uploadbukti/{kodeSewa}', 'UserSewaController@showUploadBukti');
Route::post('user/uploadbukti', 'UserSewaController@upload')->name('upload.bukti');
Route::get('user/riwyat-sewa/detail/{kodeSewa}', 'UserSewaController@riwayatSewaDetail')->name('riwayat.detail');


// All Product
Route::get('allProduct', 'ProductController@product')->name('all.product');
Route::get('product/details/{id}/{product_name}', 'ProductController@productDetail')->middleware('verified');

// Add to Cart
Route::post('add/to/cart/{id}', 'CartController@addCart')->name('addCart')->middleware('verified');
Route::get('remove/cart/{rowId}', 'CartController@removeCart');
Route::post('update/cart', 'CartController@updateCart')->name('update.cart');
Route::get('checkCart', 'CartController@check');
Route::get('product/cart', 'CartController@showCart')->name('show.cart');

// Checkout
Route::get('product/checkout', 'CheckoutController@checkout')->name('checkout');
Route::post('product/checkout/final', 'CheckoutController@final')->name('final.checkout');


// Admin
Route::get('dashboard', 'Admin\AdminController@index');
Route::get('admin/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\Auth\LoginController@login');
Route::get('admin/logout', 'Admin\AdminController@logout')->name('admin.logout');

Route::get('admin/edit/profile', 'Admin\AdminController@showEdit')->name('admin.edit');
Route::post('admin/updateProfile', 'Admin\AdminController@updateProfile')->name('admin.update.profile');
Route::post('admin/updatePassword', 'Admin\AdminController@updatePassword')->name('admin.password.update');
