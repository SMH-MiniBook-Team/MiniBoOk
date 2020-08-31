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


/* =========================== CONCERNING PUBLICATIONS =========================================================*/



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


/* ==============================================================================================================*/