<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function(){
  return view('zfood.home');
});



Route::get('/menu', function(){
  return view('zfood.menu');
});




Route::get('/staff', function(){
  return view('zfood.staff');
});




