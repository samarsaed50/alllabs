<?php
use Illuminate\Http\Request;
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
Route::get('posts','Postscontroller@index')->name('posts.index')->middleware('auth');
Route::get('posts/show/{id}', 'Postscontroller@show')->name('posts.show')->middleware('auth');
Route::get('posts/create','Postscontroller@create')->name('posts.create')->middleware('auth');
Route::post('posts','Postscontroller@store')->name('posts.store')->middleware('auth');
Route::get('/posts/edit/{id}', 'Postscontroller@edit')->name('posts.edit')->middleware('auth');
Route::post('/posts/update/{id}', 'Postscontroller@update')->name('posts.update')->middleware('auth');
Route::get('/posts/delete/{id}', 'Postscontroller@destroy')->name('posts.delete')->middleware('auth');

Auth::routes();
Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/home', 'HomeController@index')->name('home');
