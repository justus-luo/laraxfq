<?php
//路由分组
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    Route::get('login','LoginController@index')->name('admin.login');
    Route::post('login','LoginController@login')->name('admin.login');

    Route::get('index','IndexController@index')->name('admin.index');
    //欢迎页
    Route::get('welcome','IndexController@welcome')->name('admin.welcome');
});


