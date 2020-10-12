<?php
// Route::get("test-email", function(){
// return new Abdazz\PostsManager\Mail\PostCreated(3, "Nouveau article");
// });

Route::resource('categories', 'Abdazz\PostsManager\Http\Controllers\CategoryController');

Route::resource('posts', 'Abdazz\PostsManager\Http\Controllers\PostsController');


Route::get('/admin', 'Abdazz\PostsManager\Http\Controllers\PostsController@adminIndex')->name("admin.index");

Route::get('/categories-admin', 'Abdazz\PostsManager\Http\Controllers\CategoryController@adminIndex')->name("admin.categories");

