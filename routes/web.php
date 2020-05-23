<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/book/interface', "TodoController@interface" );
Route::get('/book', "TodoController@index" );
Route::post('/book',"TodoController@store" );
Route::post('/book/{id}',"TodoController@destroy");
Route::get('/update/{id}',"TodoController@edit");
Route::post('/update/edit/{id}','TodoController@update');
