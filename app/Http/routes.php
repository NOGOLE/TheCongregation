<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration', function(){
  return view('registration');
});

Route::get('church-register', function(){
  //var_dump('True'); exit();
  return view('church.register');

});

Route::get('member-register', function(){
  //var_dump('True'); exit();
  return view('member.register');

});

Route::post('login','Auth\AuthController@login');

Route::get('about', function(){
	return view('about');
});

Route::post('register','Auth\AuthController@create');
Route::get('event', function() {
  event(new App\Events\UserAccountCreated(App\User::find(rand(0,50))));
  //event(new App\Events\ChurchAccountCreated(App\Church::find(rand(0,50))));
  //event(new App\Events\ChurchBulletinCreated(App\Bulletin::find(rand(0,50))));
  //event(new App\Events\ChurchEventCreated(App\Event::find(rand(0,50))));
});

Route::resource('churches','ApiChurchController');
