<?php

Route::get('st', 'TestController@sessionTest');

Route::get('reading-circles/books/registration/form', 'Books\RegistrationController@form');
Route::match(['get', 'post'], 'reading-circles/books/registration/action', 'Books\RegistrationController@action');
Route::get('reading-circles/books/registration/done', 'Books\RegistrationController@done');

Route::middleware('auth.rcmember')->group(function() {
    Route::get('reading-circles/', 'IndexController@index')->middleware('auth.rcmember');
});

Route::middleware('auth.not_rcmember')->group(function(){
    Route::get('reading-circles/login', 'LoginController@login');
    Route::post('reading-circles/auth', 'LoginController@auth');
});
