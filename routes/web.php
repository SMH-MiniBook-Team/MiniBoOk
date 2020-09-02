<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [
 'uses' => 'PublicationController@index',
 'as' => 'home',
 'middlware' => 'auth'
]);











Route::resource('publications','PublicationController');

/*Route::post('/createpublication', [
    'uses' => 'PublicationController@store',
    'as' => 'publications.store',
    'middlware' => 'auth'

]);*/

Route::get('/delete-publication/{publication_id}',[
    'uses' => 'PublicationController@destroy',
    'as' => 'publications-destroy',
    'middlware' => 'auth'
]);

Route::post('/share-publication/{publication_id}',[
    'uses' => 'PublicationController@share',
    'as' => 'post.share',
    'middlware' => 'auth'
]);





Route::get('showFromNotification/{publication}/{notification}' , 'PublicationController@showFromNotification')->name('publication.showFromNotification');

Route::post('/comments/{publication}', 'CommentsController@store')->name('comments.store'); 
Route::get('/show/{id}', 'CommentsController@showPost')->name('publications.show');
Route::post('/commentReply/{comment}', 'CommentsController@storeCommentReply')->name('comments.storeReply');







Auth::routes();

Route::get('/messanger', [
    'uses' => 'MessageController@index',
    'as' => 'message',
    'middlware' => 'auth'
   ]);
   Route::get('/message/{id}', 'MessageController@getMessage')->name('message');
   Route::post('message', 'MessageController@sendMessage');










/*Search*/ 
Route::get('/search', 'SearchController@getResults')->name('search.results');

/*User profile*/
Route::get('/user{id}', 'ProfileController@getProfile')->name('profile.index');

/*Friends*/
Route::group([
    'middleware' => 'auth'
  ], function() {
      Route::get('/friends', 'FriendController@getIndex')->name('friends.index');
  });

  Route::group([
    'middleware' => 'auth'
  ], function() {
      Route::get('/friends/add/{id}', 'FriendController@getAdd')->name('friends.add');
  });

  Route::group([
    'middleware' => 'auth'
  ], function() {
      Route::get('/friends/accept{id}', 'FriendController@getAccept')->name('friends.accept');
  });

  Route::group([
    'middleware' => 'auth'
  ], function() {
      Route::post('/friends/delete/{id}', 'FriendController@postDelete')->name('friends.delete');
  });








