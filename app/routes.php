<?php

Route::get('/', array('before' => 'members_auth', 'uses' => 'LoginController@dashboard'));

Route::any('/login', array("uses" =>"LoginController@showLogin", 'as'=>"login"));

Route::post('/login', 'LoginController@storeLogin');



Route::get('/logout', 'LoginController@getLogout');

Route::get('/register', 'LoginController@showRegister');

Route::post('/register', 'LoginController@storeRegister');

Route::get('/register/{userId}/activate/{activationCode}', 'LoginController@registerActivate');

Route::get('/forgotpassword', 'LoginController@showForgotpassword');

Route::post('/forgotpassword', 'LoginController@storeForgotpassword');

Route::get('/newpassword', 'LoginController@showNewPassword');

Route::post('/newpassword', 'LoginController@storeNewPassword');

Route::get('/social/{provider}/{action?}', array("as" => "loginWith", "uses" => "LoginController@loginWithSocial"));

Route::group(array('before' => 'members_auth'), function(){
    // your routes

    Route::get('/myprofile', 'LoginController@myprofile');
});