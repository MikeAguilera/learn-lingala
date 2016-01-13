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
//index
Route::get('/', function () {
    return view('welcome');
});

//dashboard
Route::get('/dashboard', function () {
    return view('learn.dashboard');
});

//about
Route::get('/about', function () {
    return view('learn.about');
});

//basics
Route::get('/basics', function () {
    return view('learn.basics');
});

//verbsHome
Route::get('/verbsHome', function () {
    return view('learn.verbsHome');
});

//phraseHome
Route::get('/phraseHome', function () {
    return view('learn.phraseHome');
});

//intermediateHome
Route::get('/intermediateHome', function () {
    return view('learn.intermediateHome');
});

//FamilyHome
Route::get('/FamilyHome', function () {
    return view('learn.FamilyHome');
});

//inthehouseHome
Route::get('/inthehouseHome', function () {
    return view('learn.inthehouseHome');
});

//advancedHome
Route::get('/advancedHome', function () {
    return view('learn.advancedHome');
});

//contact
Route::get('/contactMe', function () {
    return view('learn.contactMe');
});



//Route::get('/todos', 'TodoListController@index');

//Route::get('/todos/{id}', 'TodoListController@show');

//Route::get('/', ['as' => 'welcome', function () {
    //
//}]);