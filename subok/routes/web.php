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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/','homeController@index');
//Admin
//Route::get('/Admin/AcademicYear','homeController@index');
Route::get('/Admin/AccreditationRequirement','Admin_AccreditationRequirement@index');
//Route::get('/Insert_AccreditationRequirement','Admin_AccreditationRequirement');

