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

Route::get('/list', 'HomeController@listProposals')->name('list');

Route::get('/add', 'HomeController@addProposals')->name('add');

Route::post('/list', 'HomeController@addProposals')->name('add');


/*
Posts

List -> GET /posts 

View create form ->GET /posts/create

Submit create form ->POST /posts

Get data for update form ->GET /posts/{id}/edit

View data for single post ->GET /posts/{id}

Update data from update form->PATCH /posts/{id}

Delete post->DELETE /posts/{id}

*/