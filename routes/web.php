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

Route::get('/', 'PageController@welcome');
Route::post('/search', 'PageController@search');

Route::get('/communities/{community}', 'CommunityController@show');
// index is for showing all communities, we are actually displaying a community properties for show --

Route::get('/properties/', 'PropertyController@index');
Route::get('/properties/{property}', 'PropertyController@show');
// here we are showing individual properties, not all of them

Route::post('/properties/{property}/agent-contact', 'PropertyController@agentContact');
Route::post('/properties/{property}/schedule-contact', 'PropertyController@scheduleContact');

Route::get('/profile/{user}', 'ProfileController@show');

Route::post('/properties/{property}/favorite', 'FavoriteController@store');
Route::delete('/properties/{property}/favorite', 'FavoriteController@destroy');


Route::get('/agents/{agent}', 'AgentController@index')->name('agent.property.index');
Route::post('/agents/{agent}', 'AgentController@store')->name('agent.property.store');
Route::get('/agents/{agent}/create', 'AgentController@create')->name('agent.property.create');
Route::get('/agents/{agent}/{property}/edit', 'AgentController@edit')->name('agent.property.edit');
Route::get('/agents/{agent}/{property}', 'AgentController@show')->name('agent.property.show');
Route::post('/agents/{agent}/{property}', 'AgentController@update')->name('agent.property.update');
Route::delete('/agents/{agent}/{property}', 'AgentController@destroy')->name('agent.property.destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



