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
    return view('auth/login');
});

Auth::routes();

/*Route::group(['middleware' => 'auth','prefix' => 'admin'], function () {
    
    Route::get('/', 'Admin\AdminController@index');

    Route::resource('users', 'Admin\UserController');

    Route::get('users/paper/{id}', ['as'=>'users.paper','uses'=>'Admin\UserController@paper']);
    Route::post('users/paper/{paper}', ['as'=>'users.paper.store','uses'=>'Admin\UserController@paperStore']);
    Route::delete('users/paper/{user}/{paper}', ['as'=>'users.paper.destroy','uses'=>'Admin\UserController@paperDestroy']);

    Route::resource('papers', 'Admin\PaperController');

    Route::get('papers/permission/{id}', ['as'=>'users.permission','uses'=>'Admin\PaperController@permission']);
    Route::post('papers/permission/{paper}', ['as'=>'users.permission.store','uses'=>'Admin\PaperController@permissionStore']);
    Route::delete('papers/permission/{paper}/{permission}', ['as'=>'users.permission.destroy','uses'=>'Admin\PaperController@permissionDestroy']);

    Route::get('/', 'AlbumsController@index');
    Route::get('/albums', 'AlbumsController@index');
    Route::post('/albums/create', 'AlbumsController@create');
  
    
    
    
    });
*/
Route::get('/home', 'HomeController@index')->name('home');
//ALBUMS
Route::get('/albums', 'AlbumsController@index');
Route::get('/albums/create', 'AlbumsController@create');
Route::post('/albums/store', 'AlbumsController@store');
Route::get('/albums/{id}', 'AlbumsController@show');
//FAQ
Route::get('/faqs', 'FaqsController@index');
Route::get('/faqs/create', 'FaqsController@create');
Route::post('/faqs/store', 'FaqsController@store');
//PHOTOS
Route::get('/photos/create/{id}', 'PhotosController@create');
Route::post('/photos/store', 'PhotosController@store');
Route::get('/photos/{id}', 'PhotosController@show');
Route::delete('/photos/{id}', 'PhotosController@destroy');

