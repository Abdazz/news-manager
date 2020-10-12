<?php
// Route::get("test-email", function(){
// return new Abdazz\PostsManager\Mail\PostCreated(3, "Nouveau article");
// });

Route::resource('categories', 'Abdazz\PostsManager\CategoryController');

Route::resource('posts', 'Abdazz\PostsManager\PostsController');


Route::get('/admin', 'Abdazz\PostsManager\PostsController@adminIndex')->name("admin.index");

Route::get('/categories-admin', 'Abdazz\PostsManager\CategoryController@adminIndex')->name("admin.categories");

