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

Route::get('/', 'CvinfoController@getInfos');

Route::get('/experience', 'CvinfoController@getExperience');

Route::get('/formation', 'CvinfoController@getFormation');

Route::get('/competence', 'CvinfoController@getCompetence');

Route::get('/loisir', 'CvinfoController@getLoisir');

Route::get('/contact', 'CvinfoController@getContact');
