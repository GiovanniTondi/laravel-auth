<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', function () { return view('index'); }) -> name('index');


Route::get('/home', 'HomeController@index')->name('home');


// EMPLOYEES
Route::get('/employees', 'GuestController@EmpIndex') -> name('emp-index');
Route::get('/employees/{id}', 'GuestController@empShow') -> name('emp-show');
Route::post('/employees/update/{id}', 'LoggedController@empSave') -> name('emp-save');
Route::get('/employees/delete/{id}', 'LoggedController@empDestroy') -> name('emp-destroy');


// LOCATIONS
Route::get('/locations', 'GuestController@locIndex') -> name('loc-index');
Route::get('/locations/{id}', 'GuestController@locShow') -> name('loc-show');
Route::post('/locations/update/{id}', 'LoggedController@locSave') -> name('loc-save');


// TASKS
Route::get('/tasks', 'GuestController@taskIndex') -> name('task-index');
Route::get('/tasks/{id}', 'GuestController@taskShow') -> name('task-show');
Route::post('/tasks/update/{id}', 'LoggedController@taskSave') -> name('task-save');
