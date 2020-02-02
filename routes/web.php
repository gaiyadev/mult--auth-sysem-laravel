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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dash', 'HomeController@dash')->name('dash');

/**
 * 
 * REGISTRING MY ADMIN ROUTES HERE...
 */
Route::get('admin/home', 'AdminController@index')->name('admin.home');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
//Route::post('admin-password/email', 'Admin\PasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset', 'Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::get('admin/register', 'Admin\RegisterController@showRegistrationForm')->name('aregister');
Route::post('admin/register', 'Admin\RegisterController@createAdmin')->name('admin.reg');

//Route::post('/admin-logout', 'Admin\LoginController@logout')->name('admin.logout');

/**
 * change password
 */

Route::get('/changePassword','Auth\ChangePasswordController@showChangePasswordForm')->name('changePassword');
Route::post('/changePassword','Auth\ChangePasswordController@changePassword')->name('changePassword');
Route::get('/Mail', 'MailCOntroller@index');
