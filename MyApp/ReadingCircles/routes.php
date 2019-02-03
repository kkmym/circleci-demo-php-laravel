<?php

Route::get('st', 'TestController@sessionTest');

Route::get('reading-circles/', 'TestController@index')->middleware('auth.rcmember');

Route::get('reading-circles/login', 'LoginController@login');
Route::post('reading-circles/auth', 'LoginController@auth');
