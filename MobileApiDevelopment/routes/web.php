<?php

use Illuminate\Support\Facades\Route;

//Route::view('/register','register');

Route::get('/', function () {
    return view('welcome');
});
Route::post('/register-save','StudentController@saveStudent')->name('register.save');

Route::get('/register','StudentController@viewRegisterPage');
Route::post('/save-message','MessageController@messageSave')->name('message.save');
