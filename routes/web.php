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
//home
Route::get('/', 'homeController@dashboard');
Route::get('/dashboard', 'homeController@dashboard');
Route::get('/courses', 'homeController@courses');
Route::get('/courses/{id}', 'homeController@coursesByID');
Route::get('/course-intro', 'homeController@courseintro');
Route::get('/course-lesson', 'homeController@courselesson');
Route::get('/book', 'homeController@book');
Route::get('/episode', 'homeController@episode');
Route::get('/course-path', 'homeController@coursepath');
Route::get('/blog-1', 'homeController@blog');


//admin
Route::get('/admin', 'adminController@admin');
Route::get('/admin/home', 'adminController@admin');
//category
Route::get('/admin/category', 'categoryController@showCategory');
Route::get('/admin/category/add', 'categoryController@addCategory');
Route::post('/admin/category/add', 'categoryController@insertCategory');
Route::get('/admin/category/edit/{id}', 'categoryController@editCategory');
Route::post('/admin/category/edit/{id}', 'categoryController@updateCategory');
Route::get('/admin/category/delete/{id}', 'categoryController@deleteCategory');
//courses
Route::get('/admin/courses', 'courseController@showCourses');
Route::get('/admin/courses/add', 'courseController@addCourses');
Route::post('/admin/courses/add', 'courseController@insertCourses');
Route::get('/admin/courses/edit/{id}', 'courseController@editCourses');
Route::post('/admin/courses/edit/{id}', 'courseController@updateCourses');
Route::get('/admin/courses/delete/{id}', 'courseController@deleteCourses');
//lessons
Route::get('/admin/lesson/{id_course}', 'lessonController@showLessons');

//user
Route::get('/user/login', 'userController@login');
Route::post('/user/login', 'userController@checkLogin');
Route::get('/user/logout', 'userController@logout');
Route::get('/user/signup', 'userController@signup');
Route::post('/user/signup', 'userController@insertUser');
