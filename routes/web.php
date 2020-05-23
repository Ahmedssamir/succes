<?php

use Illuminate\Support\Facades\Route;

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

//::group(['perfix'=>'offers'] ,function(){
    
Route::get('/create','Appcontroller@create');
Route::post('send','Appcontroller@send')->name('comment');
Route::get('as','Appcontroller@use')->name('hi');
Route::get('ass','Appcontroller@hom')->name('hom');
Route::get('edit','Appcontroller@table');
Route::get('show','Appcontroller@show')->name('show');
//
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
