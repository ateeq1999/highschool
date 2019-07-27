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

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('main');
})->name('home')->middleware('auth');

Route::resource('employee', 'EmployeeController')->middleware('auth');
Route::resource('student', 'StudentController')->middleware('auth');
Route::resource('room', 'RoomController')->middleware('auth');
Route::resource('subject', 'SubjectController')->middleware('auth');
Route::resource('invoice', 'InvoiceController')->middleware('auth');
Route::post('/invoice/create_tow', 'InvoiceController@create_tow')->middleware('auth');

// Route::get('/home', 'HomeController@index')->name('home');
