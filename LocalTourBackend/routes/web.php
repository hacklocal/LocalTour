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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//Route::apiResource('point/{id}', 'API\PointController');

Route::get('point/{id}', 'API\PointController@show');

Route::post('newpoint', 'API\PointController@store');

/*
Route::get('/test', function () {
    return view('test');
});
*/

Route::redirect('/666', 'https://www.officetally.com/wp-content/uploads/2008/09/dwight-ascii.pdf', 302);
