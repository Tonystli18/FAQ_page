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

Route::get('/smooth-scroll', function(){
    return view('smooth-scroll');
});

Route::get('/context-menu', function(){
    return view('context-menu');
});

Route::get('/show-modal', function(){
    return view('show-modal');
});

Route::get('/modal-show', function(){
    return view('modal-show');
});