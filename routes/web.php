<?php


Route::get('articles', 'ArticlesController@index')->name('home');;

Route::get('articles/create', 'ArticlesController@create');

Route::get('articles/{id}', 'ArticlesController@show');

Route::post('articles', 'ArticlesController@store');

Route::get('articles/{id}/edit', 'ArticlesController@edit')->name('articles.edit');

Route::PATCH('articles/{id}', 'ArticlesController@update');

Route::get('articles/{id}/delete', 'ArticlesController@listdelete');

// Route::post('articles/delete/{id}', 'ArticlesController@delete')->name('articles.delete');
// Route::post('articles/delete/{id}', 'ArticlesController@delete')->name('articles.delete');
Route::delete('/delete/{id}', 'ArticlesController@delete')->name('articles.delete');


Route::get('articles/tags/{tag}', 'TagsController@index');

Route::post('articles/{article}/comments', 'CommentsController@store');



// Route::get('/login', 'SessionController@create');

// Route::post('/login', 'SessionController@store');

// Route::get('/register', 'RegistrationController@create');

// Route::post('/regitser', 'RegistrationController@store');



Auth::routes();

Route::get('/home', 'ArticlesController@index')->name('home');
Route::post('/home', 'ArticlesController@store')->name('home');

