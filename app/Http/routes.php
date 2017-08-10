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

Route::group(['namespace' => "Admin"] , function () {


    Route::get("admin-login" , "IndexController@login");
    Route::get("admin-index" , "IndexController@index");
    Route::get("admin-welcome","IndexController@welcome");
    Route::get("admin-add","AdminController@add");
    Route::get("admin-list","AdminController@lists");
    Route::get("admin-permission","AdminController@permission");
    Route::get("admin-role","AdminController@role");
    Route::get("admin-role-add","AdminController@role_add");

    Route::get("article-add","ArticleController@add");
    Route::get("article-list","ArticleController@lists");

    Route::get("member-add","MemberController@add");
    Route::get("member-del","MemberController@del");
    Route::get("member-list","MemberController@lists");
    Route::get("member-record-browse","MemberController@browse");
    Route::get("member-record-download","MemberController@download");
    Route::get("member-record-share","MemberController@share");
    Route::get("member-show","MemberController@show");

    Route::get("picture-add","PictureController@add");
    Route::get("picture-list","PictureController@lists");
    Route::get("picture-show","PictureController@show");

    Route::get("product-add","ProductController@add");
    Route::get("product-brand","ProductController@brand");
    Route::get("product-category","ProductController@cateGory");
    Route::get("product-category-add","ProductController@cateGoryAdd");
    Route::get("product-list","ProductController@lists");

    Route::get("system-base","SystemController@base");
    Route::get("system-category","SystemController@cateGory");
    Route::get("system-category-add","SystemController@cateGoryAdd");
    Route::get("system-data","SystemController@data");
    Route::get("system-log","SystemController@log");
    Route::get("system-shielding","SystemController@shielding");

});

Route::group(['namespace' => "Api"] , function () {
    Route::post('api/obRecruitment' , "ApiController@obRecruitment");
    Route::post('update/Browse/Number' , "ApiController@updateBrowseNumber");
});




