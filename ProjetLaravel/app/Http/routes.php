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
    //le lien est prefix admin suivie de la route( salut dans ce cas)

 /*
  * Route::get('salut', function() {

	return 'Salut les gens';
});
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

*/

Route::get('/', 'WelcomeController@index');

Route::get('a-propos',['as' => 'about', 'uses' =>'pagesController@about']);

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',

]);
/*
Route::get('salut/{slug}-{id}', [ 'as' => 'salut',function($slug, $id){
// affiche le lien avec slug et les id
	return "lien :". route('salut', ['slug' =>$slug, 'id' =>$id]);
}])->where ('slug', '[a-z0-9\-]+')->where ('id', '[0-9]+');
  // indique comment quel caractère est autorisé au slug et id

*/
