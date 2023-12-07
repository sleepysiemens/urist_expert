<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//ENTER

    Route::get('/', 'EnterController')->name('enter.index');

//USER

Route::group(['namespace' => 'User', 'prefix' => 'user', 'middleware' => 'user'], function()
{
    Route::get('/', 'MainController@index')->name('user.main.index');
});

//EMPLOYEE

Route::group(['namespace' => 'Employee', 'prefix' => 'employee', 'middleware' => 'employee'], function()
{
    Route::get('/', 'MainController@index')->name('employee.main.index');
});

//ADMIN

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function()
{
    Route::get('/', 'MainController@index')->name('admin.main.index');

    //application
    Route::get('/application/{application}/edit', 'ApplicationController@add_employee')->name('admin.application.add_employee');
    Route::patch('/application/{application}', 'ApplicationController@update')->name('admin.application.update');

    //documents
    Route::get('/documents/create/{application}', 'DocumentsController@create')->name('admin.documents.create');
    Route::get('/documents/{application}/edit/1', 'DocumentsController@edit')->name('admin.documents.edit');
    Route::patch('/documents/{document}', 'DocumentsController@update')->name('admin.documents.update');
    Route::patch('/documents/add_file/{document}', 'DocumentsController@add_file')->name('admin.documents.add_file');
    Route::patch('/documents/second_stage/{application}', 'DocumentsController@second_stage')->name('admin.documents.second_stage');
    Route::get('/documents/{application}/2', 'DocumentsController@stage_2')->name('admin.documents.stage_2');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Route
     */
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
});
