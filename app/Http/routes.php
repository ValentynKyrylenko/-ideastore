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

Route::get('/', 'WelcomeController@index');
Route::get('home', ['uses' => 'HomeController@index', 'as' => 'home'] );


Route::get('tags/{tags}', 'TagsController@show');
Route::get('image', 'ImagesController@make_image');


Route::resource('articles', 'ArticlesController', array('names' => array('index' => 'articles', 'show' => 'show_article')));
Route::resource('events', 'EventsController', array('names' => array('index' => 'events', 'show' => 'show_event')));
Route::resource('products', 'ProductsController', array('names' => array('index' => 'products', 'show' => 'show_product')));


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
