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

// Homepage
Route::get('/', function () {
    return view('pages.index');
});

// User Routes
Route::prefix('users')->group(function () {
		
		// Login
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        Route::post('login', 'Auth\LoginController@login');

        // User Logout Route
		Route::post('/logout', 'Auth\LoginController@userLogout')->name('user.logout');

        // Registration Routes...
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset');

        // User Profile Page
		Route::get('/dashboard', 'UserController@index')->name('user.dashboard');

		// User Settings Page
		Route::get('settings', 'UserController@settings')->name('user.settings');
		Route::post('settings', 'UserController@saveSettings');

});


// Admin Routes
Route::prefix('admin')->group(function() {
	
	// Admin Password Resets
	Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

	Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
	Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');

	// Admin Login Routes
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

	// Admin Logout Route
	Route::post('/logout', 'Auth\AdminLoginController@adminLogout')->name('admin.logout');

	// Admin Dashboard Page
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::resource('jft', 'JustForTodayController');