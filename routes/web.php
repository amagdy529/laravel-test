<?php


Route::get('articles', 'ArticlesController@index')->name('home');;

Route::get('articles/create', 'ArticlesController@create');

Route::get('articles/{id}', 'ArticlesController@show');

Route::post('articles', 'ArticlesController@store');

Route::get('articles/{id}/edit', 'ArticlesController@edit');

Route::PATCH('articles/{id}', 'ArticlesController@update');

Route::get('articles/{id}/delete', 'ArticlesController@listdelete');

Route::post('articles/{id}/delete', 'ArticlesController@delete');

Route::get('articles/tags/{tag}', 'TagsController@index');

Route::post('articles/{article}/comments', 'CommentsController@store');



// Route::get('/login', 'SessionController@create');

// Route::post('/login', 'SessionController@store');

// Route::get('/register', 'RegistrationController@create');

// Route::post('/regitser', 'RegistrationController@store');



Auth::routes();

Route::get('/home', 'ArticlesController@index')->name('home');
Route::post('/home', 'ArticlesController@store')->name('home');

