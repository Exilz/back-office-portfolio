<?php

	/* ROUTES DU SITE PUBLIC */

Route::get('/', 'AppController@index');
Route::get('/index', 'AppController@index');
Route::get('/about', 'AppController@about');
Route::get('/portfolio', 'AppController@portfolio');
Route::get('/contact', 'AppController@contact');
Route::get('/mentions-legales', 'AppController@mentionsLegales');
Route::get('/project/{id}', 'AppController@projectJson');



	/* ROUTES DU BACK-OFFICE */

Route::get('/admin', 'AdminController@index')->before('auth');

Route::post('/admin/uploadImages', 'AdminController@uploadImages')->before('auth');
Route::get('/admin/removeImage/{id}', 'AdminController@destroyImage')->before('auth');

Route::post('/admin/updateImage/{id}', 'AdminController@updateImage')->before('auth');

Route::get('/admin/login', 'AdminController@login');
Route::post('/admin/login', 'AdminController@authenticate');

Route::get('/admin/logout', 'AdminController@logout')->before('auth');

Route::get('/admin/add', 'AdminController@add')->before('auth');
Route::post('/admin/add', 'AdminController@store');


Route::get('/admin/{id}', 'AdminController@edit')->before('auth');
Route::get('/admin/{id}/delete', 'AdminController@destroy')->before('auth');
Route::post('/admin/{id}', 'AdminController@update');
