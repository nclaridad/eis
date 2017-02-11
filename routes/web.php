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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@index');

// Authentication
Auth::routes();

Route::get('/home', 'HomeController@index');
//Employee's Route
Route::get('/employees', 'EmployeesController@index');
Route::post('/getEmployees', 'EmployeesController@getEmployees');
Route::get('/addEmployee', 'EmployeesController@add');