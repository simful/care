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
Route::post('newPatient', 'PatientController@store');
Route::get('patient', 'PatientController@index');
Route::get('patient/{id}', 'PatientController@show');
