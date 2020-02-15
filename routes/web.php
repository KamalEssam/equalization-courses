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

Route::get('/index', 'HomeController@index');

Route::get('/home', 'HomeController@home')->name('home');
Route::post('/equalized/courses/done/{id}', 'HomeController@equalized')->name('equalized-done');


Route::get('/equalization', 'HomeController@equalization')->name('equalization');
Route::get('/faculty/{faculty_id}', 'HomeController@facultyCourse')->name('facultyCourse');
Route::get('/faculties', 'HomeController@faculties')->name('faculties');

Route::get('/equalization/ENG', 'HomeController@equalEN')->name('literature');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/blog/single', 'HomeController@blogsingle')->name('blog-single');
Route::get('/courses', 'HomeController@cousrses')->name('courses');
Route::get('/course/single', 'HomeController@cousrsesingle')->name('courses-single');
Route::get('/contactus', 'HomeController@contactus')->name('contact-us');
Route::get('/register', 'HomeController@register')->name('register');
Route::get('/login', 'HomeController@login')->name('login');

Route::get('/faculty/courses/{id}', 'HomeController@getFacultyCourse')->name('faculty.courses');
