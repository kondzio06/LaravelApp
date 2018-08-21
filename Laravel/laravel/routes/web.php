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


Route::get('/contacts' , 'PagesController@contacts');
Route::get('/about' , 'PagesController@about');

/*
Route::get('/videos' , 'VideosController@index');
Route::post('/videos' , 'VideosController@store');
Route::get('/videos/create' , 'VideosController@create');
Route::get('/videos/{id}' , 'VideosController@show');
Route::get('/videos/{id}/edit' , VideosController@edit);
*/

Route::resource('videos' , 'VideosController');





//Route::group(['middleware' => ['web']], function () {
    //
//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
