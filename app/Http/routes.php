<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::get('student/index',['uses'=>'StudentController@index']);



Route::group(['middleware' => ['web']], function () {
    //
    Route::group(['prefix' => 'admin','namespace' => 'Admin'],function ($router)
    {
        $router->get('login', 'LoginController@showLoginForm')->name('admin.login');
        $router->post('login', 'LoginController@login');
        $router->post('logout', 'LoginController@logout');

        $router->get('dash', 'DashboardController@index');
    });
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');



});



Route::group(['middleware' => 'web'], function () {
    Route::any('student/cache1', 'StudentController@cache1');
    Route::any('student/cache2', 'StudentController@cache2');



});
