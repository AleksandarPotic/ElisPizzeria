<?php

//User
Route::get('/','User\HomeController@index')->name('home');
Route::get('/menu','User\CategoryController@index')->name('menu');
Route::get('/contact','User\ContactController@index')->name('contact');
Route::post('/contact','User\ContactController@send')->name('contact.send');
Route::get('/menu-item','User\ProductController@index')->name('product');
Route::get('specials','User\SpecialController@index')->name('special');
Route::get('/wings','User\WingsController@index')->name('wings');

Route::get('/online-ordering', function(){
	return view('user.online-ordering');
})->name('online.order');

//Admin
Route::get('/admin/home','Admin\HomeController@index')->name('admin.home');
Route::resource('/admin/products','Admin\ProductController');
Route::resource('/admin/specials','Admin\SpecialController');
Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/admin/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');


