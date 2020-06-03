<?php
//路由分组
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    Route::get('login','LoginController@index')->name('admin.login');
    Route::post('login','LoginController@login')->name('admin.login');

    Route::group(['middleware'=>'ckadmin'],function (){
        Route::get('index','IndexController@index')->name('admin.index');
        //欢迎页
        Route::get('welcome','IndexController@welcome')->name('admin.welcome');
        //退出
        Route::get('logout','IndexController@logout')->name('admin.logout');
        //用户管理
        Route::get('user/index','UserController@index')->name('user.index');
        Route::get('/user/add', 'UserController@create')->name('user.create');
        Route::post('/user/add','UserController@store')->name('user.store');

        Route::delete('/user/del/{id}','UserController@del')->name('user.del');
        Route::get('/user/restores/{id}','UserController@restores')->name('user.restores');
        Route::delete('/user/delall','UserController@delall')->name('user.delall');
        Route::get('/user/edit/{id}','UserController@edit')->name('user.edit');
        Route::put('/user/edit/{id}','UserController@update')->name('user.edit');

    });

});


