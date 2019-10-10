<?php

Auth::routes();

Route::get('/', 'ControllerPerson@index')->name('home');

Route::get('/create', 'ControllerAuthPerson@create')->name('create');
Route::post('/store', 'ControllerAuthPerson@store')->name('store');

Route::get('/edit/{id}', 'ControllerAuthPerson@edit')->name('edit');
Route::post('/update/{id}', 'ControllerAuthPerson@update')->name('update');

Route::get('/destroy/{id}', 'ControllerAuthPerson@destroy')->name('destroy');
