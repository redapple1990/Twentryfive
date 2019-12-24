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

Route::get('/home',['as'=>'dashboard','uses'=>'HomeController@index']);
// Route::get('/typography',['as'=>'typography','uses'=>'HomeController@typography']);
// Route::get('/helper',['as'=>'helper','uses'=>'HomeController@helper']);
// Route::get('/widget',['as'=>'widget','uses'=>'HomeController@widget']);
// Route::get('/table',['as'=>'table','uses'=>'HomeController@table']);
// Route::get('/media',['as'=>'media','uses'=>'HomeController@media']);
// Route::get('/chart',['as'=>'chart','uses'=>'HomeController@chart']);
// Route::get('/form',['as'=>'form','uses'=>'HomeController@form']);
Route::get('/events/index',['as'=>'events/index','uses'=>'EventsController@index']);
Route::get('/events/single',['as'=>'events/single','uses'=>'EventsController@single']);
Route::get('/contacts/index',['as'=>'contacts/index','uses'=>'ContactsController@index']);

Route::get('/guests/password',['as'=>'guests','uses'=>'GuestsController@index']);

Route::group(['middleware' => ['role:admin']], function () {

    Route::resource('settings/manageusers/admins', 'Settings\ManageUsers\AdminsController');
    Route::resource('settings/manageusers/ungrouped', 'Settings\ManageUsers\UngroupedController'); 
    Route::resource('settings/manageusers/regularusers', 'Settings\ManageUsers\RegularUsersController'); 
    Route::resource('settings/manageusers/externalusers', 'Settings\ManageUsers\ExternalUsersController'); 
});

Route::resource('profile','Users\ProfileController');


