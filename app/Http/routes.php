<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home.content');
});

Route::get('/index', function () {
    return view('home.other');
});

Route::resource('content', 'ItineraireController');



Route::get('/admin', function(){

    return view('admin.index');

});




/*Route::resource('admin/users', 'AdminUsersController');

Route::resource('admin/posts', 'AdminPostsController');*/


Route::group(['middleware' => 'admin'], function (){

    Route::resource('admin/users', 'AdminUsersController');

    Route::resource('admin/posts', 'AdminPostsController');

    Route::get('/home', 'HomeController@index');

    Route::resource('admin/quartier', 'AdminQuartierController');

    Route::resource('admin/hopital', 'AdminHopitalController');

    Route::resource('admin/ambulance', 'AdminAmbulanceController');

    Route::resource('admin/vehicule', 'AdminVehiculesController');

    Route::resource('admin/medecin', 'AdminMedecinController');
});

Route::auth();

