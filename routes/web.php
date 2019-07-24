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
Route::get('/', function () {
    return view('main');
});

Route::get('/about', function () {
    return view('about');
});

Route::resource('employee', 'EmployeeController');
Route::resource('student', 'StudentController');
Route::resource('room', 'RoomController');
Route::resource('subject', 'SubjectController');
Route::resource('invoice', 'InvoiceController');
Route::post('/invoice/create_tow', 'InvoiceController@create_tow');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
