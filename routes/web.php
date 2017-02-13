<?php

Route::get('/',function(){
	if (Auth()->check()){
		return redirect('home');		
	}else{
		return view('welcome');
	}
});
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::post('/newPatient','patientController@store');
Route::get('/patient','patientController@index');
Route::get('/patient/{med_rec}','patientController@show');