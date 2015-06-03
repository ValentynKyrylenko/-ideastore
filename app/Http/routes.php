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
Route::get('mysitemap', function(){

    // create new sitemap object
    $sitemap = App::make("sitemap");

    // add items to the sitemap (url, date, priority, freq)
    $sitemap->add(URL::to('products'), '2012-08-25T20:10:00+02:00', '1.0', 'daily');
    $sitemap->add(URL::to('articles'), '2012-08-26T12:30:00+02:00', '0.9', 'monthly');

    // get all posts from db
    $articles = DB::table('articles')->orderBy('created_at', 'desc')->get();

    // add every post to the sitemap
    foreach ($articles as $article)
    {
//        $sitemap->add($article->body, $article->created_at, $article->title);
//        $sitemap->add($article->slug, $article->modified, $article->priority, $article->freq);
        $sitemap->add(route('articles', $article->id),
            $article->created_at, '0.5', 'monthly');
    }

    // generate your sitemap (format, filename)
    $sitemap->store('xml', 'mysitemap');
    // this will generate file mysitemap.xml to your public folder

});

Route::get('/', 'WelcomeController@index');
Route::get('home', ['uses' => 'HomeController@index', 'as' => 'home'] );
Route::get('charity',['uses' => 'CharityController@index', 'as' => 'charity_action'] );


Route::get('tags/{tags}', 'TagsController@show');
Route::get('tagads/{tagads}', 'TagadsController@show');



Route::resource('articles', 'ArticlesController', array('names' => array('index' => 'articles', 'show' => 'show_article')));
Route::resource('events', 'EventsController', array('names' => array('index' => 'events', 'show' => 'show_event')));
Route::resource('products', 'ProductsController', array('names' => array('index' => 'products', 'show' => 'show_product')));

Route::resource('ads', 'AdsController', array('names' => array('index' => 'ads', 'show' => 'show_ad', 'edit' => 'edit_ad', 'create' => 'create_ad')));

Route::get('login/{provider?}', 'Auth\AuthController@login');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('image', 'ImageController@index');
Route::get('image/get/{filename}', [
    'as' => 'getentry', 'uses' => 'ImageController@get']);
Route::post('image/add',[
    'as' => 'addentry', 'uses' => 'ImageController@add']);
Route::get('image/delete/{filename}', [
    'as' => 'deleteentry', 'uses' => 'ImageController@delete']);
