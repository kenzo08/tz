<?php

use Illuminate\Support\Facades\Route;


Route::get('/application', function () {
    return view('application');
});
Route::get('/employee', function () {
    return view('employee');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/complain', function () {
    return view('complain');
});
Route::get('/', function(){
    return  view('home');
});


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route:post('/emlpoyee');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
