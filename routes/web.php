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

Route::get('/','HomeController@mainpage')->name('mainpage');
Route::get('/about','HomeController@about');
Route::get('/contact','HomeController@contact');
Route::get('/adminPanel','DashboardController@index')->name('adminPanel');
Route::get('/login','DashboardController@login')->name('login');
Route::get('/register','DashboardController@register');
Route::post('/registration_admin','DashboardController@createAdmin')->name('registration');
Route::post('/adminPanel','DashboardController@createLogin')->name('dashboard');
Route::get('/add_doctor','HomeController@doctor')->name('add_doctor');
Route::post('/registration','HomeController@create')->name('doctor_create');
Route::post('/make_appoinment','AppoinmentController@appoinment')->name('make_appoinment');

Route::get('/dr_list','HomeController@dr_list')->name('dr_list');
Route::get('/appoinment_list','AppoinmentController@index')->name('appoinment_list');
Route::get('/doctor_delete/{id}','HomeController@delete')->name('doctor_delete');
Route::get('/approval/{id}','AppoinmentController@approval')->name('approval');
Route::get('/logout','AppoinmentController@logout')->name('logout');
Route::get('/logout_admin','AppoinmentController@logout_admin')->name('logout_admin');
Route::get('/appoinment_status','AppoinmentController@appoinment_status')->name('appoinment_status');




