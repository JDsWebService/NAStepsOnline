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

// Route::get('/regex', 'RegexController@parseStepQuestions');

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

		// User Work Routes
		Route::prefix('work')->middleware('auth')->group(function () {

			// Steps
			Route::prefix('st')->group(function () {

				// Step One
				Route::prefix('1')->group(function () {
					// Step One Sections
					Route::prefix('s')->group(function () {
						// Step 1 2.txt
						Route::get('1', 'StepsController@stepOneSectionOne')->name('step.one.section.one');
						// Step 1 3.txt
						Route::get('2', 'StepsController@stepOneSectionTwo')->name('step.one.section.two');
						// Step 1 4.txt
						Route::get('3', 'StepsController@stepOneSectionThree')->name('step.one.section.three');
						// Step 1 5.txt
						Route::get('4', 'StepsController@stepOneSectionFour')->name('step.one.section.four');
						// Step 1 6.txt
						Route::get('5', 'StepsController@stepOneSectionFive')->name('step.one.section.five');
						// Step 1 7.txt
						Route::get('6', 'StepsController@stepOneSectionSix')->name('step.one.section.six');
						// Step 1 8.txt
						Route::get('7', 'StepsController@stepOneSectionSeven')->name('step.one.section.seven');
						// Step 1 9.txt
						Route::get('8', 'StepsController@stepOneSectionEight')->name('step.one.section.eight');
						// Step 1 10.txt
						Route::get('9', 'StepsController@stepOneSectionNine')->name('step.one.section.nine');
					});
					// Step 1 1.txt
					Route::get('opening', 'StepsController@stepOneOpening')->name('step.one.opening');
					// Step One Index
					Route::get('/', 'StepsController@stepOneIndex')->name('step.one.index');
				});

				// Step Two
				Route::prefix('2')->group(function () {
					// Step Two Sections
					Route::prefix('s')->group(function () {
						// Step 2 2.txt
						Route::get('1', 'StepsController@stepTwoSectionOne')->name('step.two.section.one');
						// Step 2 3.txt
						Route::get('2', 'StepsController@stepTwoSectionTwo')->name('step.two.section.two');
						// Step 2 4.txt
						Route::get('3', 'StepsController@stepTwoSectionThree')->name('step.two.section.three');
						// Step 2 5.txt
						Route::get('4', 'StepsController@stepTwoSectionFour')->name('step.two.section.four');
						// Step 2 6.txt
						Route::get('5', 'StepsController@stepTwoSectionFive')->name('step.two.section.five');
						// Step 2 7.txt
						Route::get('6', 'StepsController@stepTwoSectionSix')->name('step.two.section.six');
						// Step 2 8.txt
						Route::get('7', 'StepsController@stepTwoSectionSeven')->name('step.two.section.seven');
					});
					// Step 2 1.txt
					Route::get('opening', 'StepsController@stepTwoOpening')->name('step.two.opening');
					// Step Two Index
					Route::get('/', 'StepsController@stepTwoIndex')->name('step.two.index');
				});

				// Step Three
				Route::prefix('3')->group(function () {
					// Step Three Sections
					Route::prefix('s')->group(function () {
						// Step 3 2.txt
						Route::get('1', 'StepsController@stepThreeSectionOne')->name('step.three.section.one');
						// Step 3 3.txt
						Route::get('2', 'StepsController@stepThreeSectionTwo')->name('step.three.section.two');
						// Step 3 4.txt
						Route::get('3', 'StepsController@stepThreeSectionThree')->name('step.three.section.three');
						// Step 3 5.txt
						Route::get('4', 'StepsController@stepThreeSectionFour')->name('step.three.section.four');
						// Step 3 6.txt
						Route::get('5', 'StepsController@stepThreeSectionFive')->name('step.three.section.five');
						// Step 3 7.txt
						Route::get('6', 'StepsController@stepThreeSectionSix')->name('step.three.section.six');
					});
					// Step 3 1.txt
					Route::get('opening', 'StepsController@stepThreeOpening')->name('step.three.opening');
					// Step Three Index
					Route::get('/', 'StepsController@stepThreeIndex')->name('step.three.index');
				});

				// Step Working Guide Preface
				Route::get('/preface', 'StepsController@preface')->name('steps.preface');

				// Step Work Dashboard
				Route::get('/', 'StepsController@dashboard')->name('steps.dashboard');
			});

			// Main Work Dashboard
			Route::get('/', 'WorkController@dashboard')->name('work.dashboard');

		});
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

	// Admin News Pages
	Route::prefix('news')->middleware('auth:admin')->group(function () {
		// Create (Admin)
		Route::get('/create', 'NewsController@create')->name('news.create');

		// Store (Admin)
		Route::post('/', 'NewsController@store')->name('news.store');

		// Edit (Admin)
		Route::get('/{id}/edit', 'NewsController@edit')->name('news.edit');

		// Update (Admin)
		Route::put('/{id}', 'NewsController@update')->name('news.update');

		// Destroy (Admin)
		Route::delete('/{id}', 'NewsController@destroy')->name('news.destroy');

		// Admin Index
		Route::get('/', 'NewsController@adminIndex')->name('news.admin.index');

	});

	// Just For Today
	Route::prefix('jft')->middleware('auth:admin')->group(function () {
		// Create (Admin)
		Route::get('/create', 'JustForTodayController@create')->name('jft.create');

		// Store (Admin)
		Route::post('/', 'JustForTodayController@store')->name('jft.store');

		// Edit (Admin)
		Route::get('/{id}/edit', 'JustForTodayController@edit')->name('jft.edit');

		// Update (Admin)
		Route::put('/{id}', 'JustForTodayController@update')->name('jft.update');

		// Destroy (Admin)
		Route::delete('/{id}', 'JustForTodayController@destroy')->name('jft.destroy');

		// Index (Admin)
		Route::get('/', 'JustForTodayController@index')->name('jft.index');
	});


});

/* Just For Today */
Route::prefix('jft')->group(function() {

	// Show (Public)
	Route::get('/show', 'JustForTodayController@show')->name('jft.show');

});

// News Routes
Route::prefix('news')->group(function() {

	// Show (Public)
	Route::get('/{slug}', 'NewsController@show')->name('news.show');

	// Index (Public)
	Route::get('/', 'NewsController@publicIndex')->name('news.index');

});