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

Route::get('/home',[
     'uses'=> 'pooledController@indexx',
    'as' => 'home'
    ]);
Route::get('/galarry',[
    'uses'=> 'pooledController@galaries',
    'as' => 'g'
]);
Route::get('/table',[
    'uses'=> 'pooledController@table',
    'as' => 't'

]);
Route::get('/signin',[
    'uses'=> 'pooledController@sign',
    'as' => 's'

]);
Route::get('/signup',[
    'uses'=> 'pooledController@signups',
    'as' => 'su'

]);
Route::get('/forgot-password',[
    'uses'=> 'pooledController@forgotpasswords',
    'as' => 'fp'

]);
Route::get('/movies',[
    'uses'=> 'pooledController@movie',
    'as' => 'mv'

]);
Route::get('/natok',[
    'uses'=> 'pooledController@natok',
    'as' => 'nt'

]);
Route::get('/others',[
    'uses'=> 'pooledController@other',
    'as' => 'ot'

]);
Route::get('/icons',[
    'uses'=> 'pooledController@icons',
    'as' => 'ic'

]);
Route::get('/books',[
    'uses'=> 'pooledController@books',
    'as' => 'bo'

]);
Route::get('/news',[
    'uses'=> 'pooledController@news',
    'as' => 'ne'

]);
Route::get('/crickets',[
    'uses'=> 'pooledController@crickets',
    'as' => 'cr'

]);
Route::get('/footballs',[
    'uses'=> 'pooledController@footballs',
    'as' => 'fo'

]);
Route::get('/others',[
    'uses'=> 'pooledController@others',
    'as' => 'ot'

]);
Route::get('/maps',[
    'uses'=> 'pooledController@map',
    'as' => 'ma'

]);
Route::get('/calanders',[
    'uses'=> 'pooledController@calanders',
    'as' => 'ca'

]);
Route::get('/News',[
    'uses'=> 'pooledController@neews',
    'as' => 'new'

]);
Route::get('/oxy',[
  'uses' => 'pooledController@oxy',
    'as' => 'oxy'

]);
