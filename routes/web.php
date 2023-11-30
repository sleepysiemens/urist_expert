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
});

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Route
     */
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
});
