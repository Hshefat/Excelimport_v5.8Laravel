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
/* 
Route::get('/', function () {
    return view('excel');
}); */
// Route::get('/', 'UserController@index');
Route::get('export-user', 'UserController@exportUser')->name('export-user');

Route::get('/', 'EmployeeController@index');
Route::get('importForm', 'EmployeeController@importForm')->name('importForm');
Route::post('/import', 'EmployeeController@import')->name('import');



//v8
/* Route::post('importForm', [EmployeeController::class,'importForm')->name('importForm');
Route::post('/import', [EmployeeController::class,'import')->name('import'); */

