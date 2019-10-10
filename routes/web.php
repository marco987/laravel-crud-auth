<?php

Auth::routes();

Route::get('/', 'ControllerPerson@index')->name('home');

Route::get('/create', 'ControllerAuthPerson@create')->name('create');
Route::post('/store', 'ControllerAuthPerson@store')->name('store');
