<?php

Auth::routes();

Route::get('/', 'ControllerPerson@index')->name('home');
