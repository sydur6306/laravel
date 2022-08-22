<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function (){
   return view('welcome');
});
Route::group(['namespace'=> 'App\Http\Controllers', 'prefix' => 'stuff'],function (){
    Route::get('/','StuffController@index')->name('stuff.index');
    Route::get('/create','StuffController@create')->name('stuff.create');
    Route::post('/store','StuffController@store')->name('stuff.store');
    Route::get('/show/{id}','StuffController@show')->name('stuff.show');
    Route::delete('/delete/{id}','StuffController@delete')->name('stuff.delete');
    Route::get('/edit/{id}','StuffController@edit')->name('stuff.edit');
    Route::POST('/update/{id}','StuffController@update')->name('stuff.update');
});

Route::group(['namespace'=> 'App\Http\Controllers', 'prefix' => 'teacher'],function (){
    Route::get('/','TeacherControoler@index1')->name('teacher.index1');
    Route::get('/create1','TeacherControoler@create1')->name('teacher.create1');
    Route::post('/store1','TeacherControoler@store1')->name('teacher.store1');
});

Route::group(['namespace'=> 'App\Http\Controllers', 'prefix' => 'employee'],function (){
    Route::get('/','EmployeeController@index')->name('employee.index');
    Route::get('/create','EmployeeController@create')->name('employee.create');
    Route::post('/store','EmployeeController@store')->name('employee.store');
    Route::get('/show/{id}','EmployeeController@show')->name('employee.show');
    Route::get('/delete/{id}','EmployeeController@delete')->name('employee.delete');
});


    Route::resource('student','App\Http\Controllers\StudentController');
    Route::resource('manager','App\Http\Controllers\ManagerController');
