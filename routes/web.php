<?php

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('home');
    } else {
        return view('welcome');
    }
});

Auth::routes();

Route::get('home', 'HomeController@index');
Route::resource('patients', 'PatientController');
