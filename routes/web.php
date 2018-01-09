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

Route::get('/index', 'ProposalContrtroller@index');

Route::get('/create', 'ProposalContrtroller@create');

Route::post('/index', 'ProposalContrtroller@store');

Route::get('/proposal/{id}','ProposalContrtroller@show');

Route::get('/proposal/{id}/edit','ProposalContrtroller@update');

Route::patch('/proposal/{id}/','ProposalContrtroller@update');


/*
Posts

view all of the posts or select * from posts  -> GET /posts 

we want to create create a post and it'll display the form ->GET /posts/create

Submit the post to the database ->POST /posts

if you want to edit an existing post ->GET /posts/{id}/edit

view a specific post -> GET /posts/{id}

submit the edit post to the database ->PATCH /posts/{id}

Delete post->DELETE /posts/{id}

*/
