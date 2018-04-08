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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/projects', 'ProjectController@index')->name('projects');
Route::get('/projects/create', 'ProjectController@showRegistrationForm')->name('projects_form');
Route::get('/projects/new', 'ProjectController@create')->name('projects_create');




Route::get('/tasks', 'TaskController@index')->name('tasks');
Route::get('/users', 'UserController@index')->name('users');
Route::get('/financials', 'FinancialController@index')->name('financials');
