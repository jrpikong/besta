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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/company', 'CompanyController@index')->name('company');
Route::get('/services/','ServicesController@index')->name('overview');
Route::get('/services/{category}','ServicesController@servicesDetail')->name('sevices');
Route::get('/projects','ProjectController@listProjects')->name('projects');
Route::get('/projects/{id}','ProjectController@detailProject')->name('project-detail');
Route::get('/blog','BlogController@listBlog')->name('blog');
Route::get('/blog/{slug}','BlogController@detailBlog')->name('blog-detail');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@store')->name('contact');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
