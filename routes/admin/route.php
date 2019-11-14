<?php


Route::group(['namespace'=>'Admin','prefix'=>'admin','as'=>'admin.'],function (){
    //登陆路由
    Route::get('login','LoginController@index')->name('login');
    Route::post('login','LoginController@login')->name('login');


    Route::group(['middleware'=>['checklogin']],function (){

    //首页路由
    Route::get('index','IndexController@index')->name('index');

    Route::get('logout','IndexController@logout')->name('logout');

    //用户管理

    Route::get('user','UserController@index')->name('user');

    Route::get('create','UserController@create')->name('create');

    Route::post('store','UserController@store')->name('store');

    Route::put('update/{id}','UserController@update')->name('update');

    Route::get('edit/{id}','UserController@edit')->name('edit');

    Route::get('profile','UserController@profile')->name('profile');

    Route::put('editUser/{id}','UserController@editUser')->name('editUser');

    Route::delete('destroy/{id}','UserController@destroy')->name('destroy');

    Route::get('restore/{id}','UserController@restore')->name('restore');

    //角色管理资源路由

    Route::resource('role','RoleController');

    Route::resource('node','NodeController');





    });
});