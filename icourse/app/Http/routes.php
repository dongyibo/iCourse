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

Route::group(['middleware' => ['web']], function () {
    //主页
    Route::any('home/{tag?}',['uses'=>'LectureController@home']);
    //登录
    Route::any('login/{tag?}',['uses'=>'LectureController@login']);
    //具体课程
    Route::any('course/{name}/{fee?}',['uses'=>'LectureController@course']);
    //课程内容
    Route::any('content/{courseName}/{chapter}',['uses'=>'LectureController@content']);
    //搜索
    Route::any('search/{tag?}',['uses'=>'LectureController@search']);
    //直播
    Route::any('live/{name?}',['uses'=>'LectureController@live']);
    //老师
    Route::any('teacher',['uses'=>'LectureController@teacher']);
    //管理
    Route::any('manage',['uses'=>'LectureController@manage']);
});
