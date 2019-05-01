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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/display','AnimalController@display')->name('display');


Route::resource('animals','AnimalController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//home url assigned to home controller
Route::get('/home', 'HomeController@index')->name('home');

//user display page for adopting animals
Route::get('/display','AnimalController@display')->name('display');

//get resource for requests and assign request controller
Route::resource('requests', 'RequestController');

//display adoption view based on animal id
Route::get('/requested/{animals}', 'RequestController@create')->name('adoption_requests');

//used for getting display adoption request
Route::get('/requested', 'RequestController@index')->name('requested');

//return back success when adoption decision has been made and submitted
Route::post('/viewrequests/{adoption}', ['as' => 'review', 'uses' => 'RequestController@review']);

//get the requests view for the user
Route::get('/userrequests','RequestController@user')->name('userrequests');

//get resource and assign home to home controller
Route::resource('home', 'HomeController');

Route::resource('reviews', 'RequestController');
//middleware grouping of routes, used to prevent
//unauthorised users from hard typing urls and accessing those views
Route::middleware(['auth','admin'])->group(function() {
  // put all admin routes(whole line) in here
  Route::get('/user/{username}', 'UserController@show')->name('user');
  //gets the view which shows all the pending adoption requests and make decision
  Route::get('/viewrequests', 'RequestController@index')->name('viewrequests');
  //view which shows the all the requests ever made
  Route::get('/requests','RequestController@admin')->name('requests');
  //admin using this view to display animals with actions
  Route::get('animal/index', 'AnimalController@user')->name('display_animals');
  //get resource for animals and assign it to animal controller
  Route::resource('animals', 'AnimalController');
  // this is animal details page
  Route::get('animals/index', 'AnimalController@index')->name('display_animal');
});
