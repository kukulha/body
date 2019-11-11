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
//Sistema de Autenticación
Auth::routes(['register' => false]);

//Rutas WEB
Route::get('/', 'Web\PagesController@index')->name('home');
Route::get('/articulos/{slug}', 'Web\PagesController@post')->name('post');
Route::get('/articulos', 'Web\PagesController@blog')->name('blog');
Route::get('/categorias/{slug}', 'Web\PagesController@category')->name('category');

//Admin
Route::get('messages', 'Admin\MessagesController@index')->name('messages.index');
Route::post('messages', 'Admin\MessagesController@store')->name('messages.store');
Route::delete('messages/{message}', 'Admin\MessagesController@destroy')->name('messages.destroy');
Route::resource('categories', 'Admin\CategoriesController');
Route::resource('posts', 'Admin\PostsController');
Route::resource('promotions', 'Admin\PromotionsController');
Route::resource('instructors', 'Admin\InstructorsController');
Route::resource('lessons', 'Admin\LessonsController');
Route::resource('types', 'Admin\TypesController');
