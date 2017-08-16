<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::get('/', function(){
    return Redirect::to('home');    
});
Route::get('home', 'MainController@showHome');
Route::get('about', 'MainController@showAbout');
Route::get('articles', 'MainController@showArticles');
Route::get('article/{id}', 'MainController@showArticle');
Route::get('contact-us', 'MainController@showContact');
Route::post('contact-us', 'MainController@contactForm');
Route::get('thank-you', 'MainController@successForm');
