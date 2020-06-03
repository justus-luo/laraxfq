<?php
//Route::prefix('admin')->group(function(){
//    Route::get('index/index','IndexController@inex')->name('admin.index.index');
//});
Route::get('foo', function () {
    return 'Hello World';
});
