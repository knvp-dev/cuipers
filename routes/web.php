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

use App\Album;

Route::get('/', function() {
	$nieuwbouw = Album::whereCategory('nieuwbouw')->with('photo')->get();
	$renovatie = Album::whereCategory('renovatie')->with('photo')->get();
	$verbouwing = Album::whereCategory('verbouwing')->with('photo')->get();
    return view('pages.home',compact('nieuwbouw','renovatie','verbouwing'));
});

Route::get('/bouwwerken/{categery}', 'ShowcaseController@index');
Route::get('/bouwwerken/{category}/showcase/{album_id}', 'ShowcaseController@show');

Route::post('/contact', 'ContactController@send');
Route::get('/contact', 'ContactController@index');
Route::get('/jobs', 'VacaturesController@index');
