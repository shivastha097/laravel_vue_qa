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

Route::resource('question', 'QuestionController')->except('show');

// Route::post('/question/{question}/answers', 'AnswerController@store')->name('answers.store');
Route::resource('questions.answers', 'AnswerController')->only(['store', 'edit', 'update', 'destroy']);

Route::get('/question/{slug}', 'QuestionController@show')->name('question.show');

Route::post('/answers/{answer}/accept', 'AcceptAnswerController')->name('answers.accept');