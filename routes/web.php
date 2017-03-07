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

Route::get('/login', 'SessionController@create');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');

Route::get('login/{provider}', 'FacebookController@redirectToProvider');
Route::get('login/{provider}/callback', 'FacebookController@handleProviderCallback');


Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/terms', 'RegistrationController@terms');

Route::get('/', 'PostController@index');

Route::get('/teach', 'PostController@create');
Route::get('/teach/{teach}', 'PostController@show');
Route::post('/post', 'PostController@store');
Route::get('/session', 'PostController@session');
Route::get('/', 'PostController@latest');
Route::get('/search', 'PostController@search');
Route::get('/dashboard/course', 'PostController@teach');
Route::get('/dashboard/edit/{apply}', 'PostController@edit');
Route::post('/update/{apply}', 'PostController@update');


//Route::get('/{apply}', 'taachapplyController@store');
Route::get('/apply/{apply}', 'TeachapplyController@store');
Route::get('/home', 'TeachapplyController@teach_apply');
Route::get('/dashboard', 'TeachapplyController@teach_apply');
Route::get('/{delete}', 'TeachapplyController@destroy');
Route::get('/dashboard/course/{apply}', 'TeachapplyController@view');


