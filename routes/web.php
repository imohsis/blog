<?php

 
// user routes

Route::group(['namespace' => 'user'], function() {
    
Route::get('/', 'HomeController@index');
Route::get('post/{post}', 'PostController@post')->name('post');
});





// admin routes


Route::group(['namespace' => 'admin'], function() {
    //

Route::get('admin/home', 'HomeController@index')->name('admin.home');



Route::resource('admin/post', 'PostController');


Route::resource('admin/user', 'UserController');


Route::resource('admin/tag', 'TagController');


Route::resource('admin/category', 'CategoryController');


});



















// Route::get('post', function () {
//     return view('user/post');
// })->name('post');

// Route::get('admin/home', function () {
//     return view('admin/home');
//  })   ;

// Route::get('admin/post', function () {
//     return view('admin/post/post');
//  })   ;


// Route::get('admin/tag', function () {
//     return view('admin/tag/tag');
//  })   ;

// Route::get('admin/category', function () {
//     return view('admin/category/category');
//  })   ;