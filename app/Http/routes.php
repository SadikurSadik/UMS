<?php

Route::group(['middleware' => ['web']], function () {
  Route::get('/', function () {
      return view('welcome');
  })->name('home');
  Route::get('/login', [
    'uses'=>'UserController@getlogin',
    'as'=>'login',
  ]);
  Route::post('/postlogin',[
    'uses'=>'UserController@postlogin',
    'as'=>'postlogin',
  ]);
  Route::get('/logout',[
       'uses'=>'UserController@getLogout',
       'as'=>'logout'
  ]);
  Route::get('/savedepartment',[
       'uses'=>'DepartmentController@getDepartment',
       'as'=>'getDepartment'
  ]);
  Route::post('/postsavedepartment',[
    'uses'=>'DepartmentController@postSaveDepartment',
    'as'=>'postdepartment',
  ]);
  Route::get('/showepartments',[
       'uses'=>'DepartmentController@getshowDepartment',
       'as'=>'showepartments'
  ]);
});
