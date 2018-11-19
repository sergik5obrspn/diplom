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
    return view('frontend.index');
});
/*
Route::get('/object','FrontendController@object')->name('object');
Route::get('/adminHome','FrontendController@adminHome')->name('adminHome');
Route::get('/roomSearch','FrontendController@roomSearch')->name('roomSearch');
*/
Route::get('/','FrontendController@index')->name('home');
Route::get(trans('routes.object').'/{id}','FrontendController@object')->name('object');
Route::get(trans('routes.roomsearch'),'FrontendController@roomsearch')->name('roomSearch');
Route::get(trans('routes.room'),'FrontendController@room')->name('room');
Route::get(trans('routes.article'),'FrontendController@article')->name('article');
Route::get(trans('routes.person'),'FrontendController@person')->name('person');

Route::group (['prefix'=>'admin','middlware'=>'auth'],function(){
    Route::get('/','BackendController@index')->name('adminHome');
    Route::get(trans('routes.myobjects'),'BackendController@objects')->name('myObjects');
    Route::get(trans('routes.saveobjects'),'BackendController@saveObjects')->name('saveObjects');
    Route::get(trans('routes.profile'),'BackendController@profile')->name('profile');
    Route::get(trans('routes.saveroom'),'BackendController@saveroom')->name('saveRoom');
    Route::get('/cities','BackendController@cities')->name('cities.index');

});


Auth::routes();

