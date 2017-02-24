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




// Route::get('/dashboard', function () {
//     return view('post.dashboard');
// });

Route::get('/login', 'sessionController@create');
Route::post('/login', 'sessionController@store');
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/logout', 'sessionController@destroy');


Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');


Route::get('/', 'postController@index');
Route::get('/teach', 'postController@create');
Route::get('/teach/{teach}', 'postController@show');
Route::post('/post', 'postController@store');
Route::get('/session', 'postController@session');
Route::get('/', 'postController@latest');
Route::get('/search', 'postController@search');
Route::get('/dashboard/course', 'postController@teach');
Route::get('/dashboard/edit/{apply}', 'postController@edit');
Route::post('/update/{apply}', 'postController@update');


//Route::get('/{apply}', 'taachapplyController@store');
Route::get('/apply/{apply}', 'TeachapplyController@store');

Route::get('/dashboard', 'TeachapplyController@teach_apply');
Route::get('/{delete}', 'TeachapplyController@destroy');
Route::get('/dashboard/course/{apply}', 'TeachapplyController@view');

