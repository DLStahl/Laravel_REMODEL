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


//Schedules Controller
Route::get('/', 'SchedulesController@getIndex');

Route::get('resident/contact', 'PagesController@getContact');

Route::get('resident/about', 'PagesController@getAbout');

Route::get('resident/instructions', 'SchedulesController@getInstructions');

Route::get('resident/schedule', 'SchedulesController@getSchedule');

Route::get('resident', 'SchedulesController@getResident');

Route::get('resident/milestones', 'SchedulesController@milestones');


//Pages Controller
Route::get('about', 'PagesController@getAbout');

Route::get('contact', 'PagesController@getContact');

Route::get('page', 'PagesController@getPage');

Route::get('pages/index', 'PagesController@getIndex');

//Posts Controller
// Route::resource('posts', 'PostController');

