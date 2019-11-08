<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', 'BlogController@index');
Route::get('/blog/{post}', 'BlogController@show');