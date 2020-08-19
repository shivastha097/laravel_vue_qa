<?php

Route::get('/', 'QuestionController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('question', 'QuestionController')->except('show');

// Route::post('/question/{question}/answers', 'AnswerController@store')->name('answers.store');
Route::resource('questions.answers', 'AnswerController')->only(['store', 'edit', 'update', 'destroy']);

Route::get('/question/{slug}', 'QuestionController@show')->name('question.show');

Route::post('/answers/{answer}/accept', 'AcceptAnswerController')->name('answers.accept');

Route::post('/questions/{question}/favorites', 'FavoritesController@store')->name('questions.favorite');

Route::delete('/questions/{question}/favorites', 'FavoritesController@destroy')->name('questions.unfavorite');

Route::post('/questions/{question}/vote', 'VoteQuestionController');

Route::post('/answers/{answer}/vote', 'VoteAnswerController');