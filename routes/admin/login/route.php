<?php


Route::group(['namespace'=>'Admin','prefix'=>'admin','as'=>'admin.'],function (){
    //登陆路由
    Route::get('login','LoginController@index')->name('login');
    Route::post('login','LoginController@login')->name('login');
    //首页路由
    Route::get('index','IndexController@index')->name('index');
});