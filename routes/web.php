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

Route::get('/faq', 'QuestionController@index');

Route::get('/mf-layout', function(){
    return view('mf-layout');
});

Route::get('/fontsize', function(){
    return view('fontsize');
});