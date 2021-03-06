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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// question route
Route::get('/questions', 'QuestionController@index');
Route::post('{id}/questions', 'QuestionController@store');

// answers routes
Route::get('/answers/{id}', 'AnswerController@index');
Route::post('/answers/{user_id}/question/{question_id}', 'AnswerController@store');

// profile routes
Route::get('/profile/{id}', 'ProfileController@index');

// friends routes
Route::get('/friends','FriendsController@index');
Route::any('/search','FriendsController@search');
Route::get('/{username}/question','FriendsController@show');
Route::post('{id}/ask','FriendsController@store');


// likes
Route::post('/likes/{user_id}/question/{question_id}','LikeController@store');
// follower 
Route::post('/follow/{user_id}','FollowerController@store');
// notification
Route::get('notification','NotificationController@index');

