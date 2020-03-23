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
// Home Page Route
Route::get('/', function () {
    return view('home');
});


Auth::routes();

//ROUTE FOR VOTERS

Route::get('plans', function(){
	return view('users/plans');
});
Route::get('about', function(){
	return view('about');
});

Route::get('contact', function(){
	return view('contact');
});
//ROUTE FOR VOTERS
Route::get('contestants', 'VotersController@contestants');
Route::get('contestant/{value}', 'VotersController@vote');


Route::get('photos', function(){
	return view('photos');
});
Route::get('pastwinners', function(){
	return view('pastwinners');
});

//Route::get('/vote/{value_id}', 'HomeController@vote');

//Route::get('contestants/{value}', 'AdminController@show');


Route::get('vote', function(){
	return view('users/vote');
});

Route::get('success', function(){
	return view('success');
});


Route:: get('admin', 'AdminController@index');
Route:: get('admin/addNewContestant', 'AdminController@create');
Route:: post('save', 'AdminController@store');
Route::get('admin/{value}', 'AdminController@show');
Route::get('admin/{value}/edit', 'AdminController@edit');
Route::patch('admin/{value}', 'AdminController@update');
Route::delete('admin/{value}', 'AdminController@destroy');

//PAYSTACK CONFIG

Route::get('/verify/{reference}', 'VotersController@verify');
//Route::get('/verify/{reference}', 'AdminController@verify');
