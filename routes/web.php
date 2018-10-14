<?php

Route::get('/', 'PagesController@root')->name('root');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
	Route::get('/email_verification/send', 'EmailVerificationController@send')->name('email_verification.send');
    Route::get('/email_verify_notice', 'PagesController@emailVerifyNotice')->name('email_verify_notice');
    Route::get('/email_verification/verify', 'EmailVerificationController@verify')->name('email_verification.verify');
<<<<<<< HEAD
    Route::get('/email_verification/send', 'EmailVerificationController@send')->name('email_verification.send');

    // 开始
    Route::group(['middleware' => 'email_verified'], function() {

    });
    // 结束
=======
    
    // // 开始
    // Route::group(['middleware' => 'email_verified'], function() {
    // 	Route::get('/test', function() {
    // 		return 'Your email is verified';
    // 	});
    // });
    // // 结束

>>>>>>> b761bc7375098edad89b552db124b7c74eb790a3
});