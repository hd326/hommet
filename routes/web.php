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

Route::get('/', 'PagesController@welcome');
Route::post('/search', 'PagesController@search');

Route::get('/communities/{community}', 'CommunityController@show');
// index is for showing all communities, we are actually displaying a community properties for show --

Route::get('/properties/{property}', 'PropertyController@show');
Route::post('/properties/{property}', 'PropertyController@postContact');
// here we are showing individual properties, not all of them


