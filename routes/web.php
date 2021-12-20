<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front');
});
Route::get('/form','NewspaperController@getForm')->name('Newspaper.form');
Route::post('/form/submit','NewspaperController@submitForm')->name('Newspaper.form.submit');
Route::get('/table', 'NewspaperController@getTable')->name('Newspaper.table');
Route::get('/form/delete/{id}','NewspaperController@deleteForm')->name('Newspaper.form.delete'); 
Route::get('/form/edit/{id}','NewspaperController@editTable')->name('Newspaper.form.edit'); 
Route::post('/form/update/{id}','NewspaperController@updateForm')->name('Newspaper.form.update'); 

Route::get('/category','CategoryController@getForm')->name('Category.form'); 
Route::post('/category/submit','CategoryController@submitForm')->name('Category.form.submit'); 
Route::get('/category/table','CategoryController@getTable')->name('admin.categorylist'); 


Auth::routes();

Route::get('/home','HomeController@index')->name('home');
Route::get('/','FrontController@getData')->name('data');

Route::get('/contact','FrontController@contact')->name('Front.contact');
Route::post('/contact/submit','FrontController@submitForm');

Route::get('/singlepage/{id}','FrontController@singlepage')->name('Front.singlepage');
