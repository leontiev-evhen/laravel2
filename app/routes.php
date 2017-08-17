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


Route::get('/', 'ArtistController@showAllArtist');
Route::get('artist/{id}', 'ArtistController@showOneArtist');
Route::get('album/{id}', 'AlbumController@showAlbum');
Route::get('track/{id}', 'TrackController@showTrack');
