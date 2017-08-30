<?php


Route::group(['namespace' => 'Activity', 'middleware' => ['auth','menu']],function(){

    //设置
    Route::any('activity/permission', ['as' => 'activity.permission', 'uses' => 'ActivityController@index']);
    Route::any('activity/qixi/index', ['as' => 'activity.qixi.index', 'uses' => 'ActivityController@index']);
    
});