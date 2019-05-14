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
/**
 * ----------------------------------------
 * Service Container example
 *
 */
//app()->singleton("example",function(){
//   return new App\TestServiceContainer;
//});
//Route::get("/",function(){
//   $test1 = app("example");
//    $test2 = app("example");
//   dd($test1,$test2);
//});
/**
 * END Service Container example
 * ----------------------------------------
 */

Route::get('/',[
    'uses'=>'PagesController@home',
    'as'=>'home'
]);
Route::get('/contact',[
    'uses'=>'PagesController@contact',
    'as'=>'contact'
]);
Route::get('/aboutus',[
    'uses'=>'PagesController@about',
    'as'=>'aboutUs'
]);

Route::resource('/projects','ProjectController');


Route::patch('/tasks/{task}',[
    'uses'=>'projectTaskController@update',
    'as'=>'task.update'
]);
Route::get('/tasks/{task}',[
    'uses'=>'projectTaskController@show',
    'as'=>'task.show'
]);

Route::get('/tasks/{task}/edit',[
    'uses'=>'projectTaskController@edit',
    'as'=>'task.edit'
]);

Route::post('/tasks',[
    'uses'=>'projectTaskController@store',
    'as'=>'task.store'
]);