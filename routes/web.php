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
//Route For Pages
Route::match(['GET', 'POST'], '/', [
    'uses' => 'PageController@index',
    'as' => '/'
]);


//Route For Category
Route::match(['GET', 'POST'], '/categories', [
    'uses' => 'CategoryController@index',
    'as' => 'category.index'
]);
Route::match(['POST'], 'categories/store', [
    'uses' => 'CategoryController@store',
    'as' => 'category.store'
]);
Route::match(['GET', 'POST'], 'categories/{id}', [
    'uses' => 'CategoryController@show',
    'as' => 'category.show'
]);
Route::match(['PUT'], 'categories/{id}', [
    'uses' => 'CategoryController@update',
    'as' => 'category.update'
]);
Route::match(['DELETE'], 'categories/{id}', [
    'uses' => 'CategoryController@destroy',
    'as' => 'category.destroy'
]);

//Route For Tags
Route::match(['GET', 'POST'], '/tags', [
    'uses' => 'TagController@index',
    'as' => 'tag.index'
]);
Route::match(['POST'], 'tags/store', [
    'uses' => 'TagController@store',
    'as' => 'tag.store'
]);
Route::match(['GET', 'POST'], 'tags/{id}', [
    'uses' => 'TagController@show',
    'as' => 'tag.show'
]);
Route::match(['PUT'], 'tags/{id}', [
    'uses' => 'TagController@update',
    'as' => 'tag.update'
]);
Route::match(['DELETE'], 'tags/{id}', [
    'uses' => 'TagController@destroy',
    'as' => 'tag.destroy'
]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
