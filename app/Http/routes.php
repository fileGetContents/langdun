<?php

Route::group(['namespace' => "Web"] , function () {
    Route::any('about' , 'AboutController@index');
    Route::any('about/{id}' , 'NewsController@index');
    Route::any('one' , 'StyleController@one');
    Route::any('two' , 'StyleController@two');
    Route::any('three' , 'StyleController@three');
    Route::any('four' , 'StyleController@four');
    Route::any('five' , 'StyleController@five');
    Route::any('six' , 'StyleController@six');
    Route::any('/' , 'WelcomeController@index');
    Route::any('work' , "WorkController@index");
    Route::any('news/{id}' , 'NewsController@index');


    Route::any("test","WorkController@test");// 测试接口

});

Route::group(['namespace' => "Home"] , function () {

});

Route::group(['namespace' => "Api"] , function () {
    Route::post('api/obRecruitment' , "ApiController@obRecruitment");
    Route::post('update/Browse/Number' , "ApiController@updateBrowseNumber");
});




