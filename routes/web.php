<?php

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::any('/adminer', '\Miroc\LaravelAdminer\AdminerAutologinController@index');

Route::get('/home', 'HomeController@index');

Route::get('/disksList', 'HomeController@disksList');
Route::get('/addDisk', 'HomeController@addDisk');
Route::get('/updateDisk', 'HomeController@updateDisk');

Route::post('/addDisk', 'ActionController@addDisk');
Route::post('/updateDisk', 'ActionController@updateDisk');
Route::post('/deleteDisk', 'ActionController@deleteDisk');

