<?php
Route::get('/','PublicController@index')->name('welcome');
route::get('/about','PublicController@index')->name('about');
Route::get('/contact','PublicController@contact')->name('contact');

Route::post("/contact","PublicController@contactPost")->name('contactPost');

































/*
// return redirect()->route('welcome',["name"=>"john","userId"=>"20"]);
//Route::redirect("/old","/new",301);
Route::view('/','welcome');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/','PublicController@index');
Route::get('posts','PublicController@displayPosts')->name('displayPosts');
Route::view('/','welcome');
Route::namespace('Admin')->prefix('admin')->group(function(){
  Route::get('users/{name?}/{age?}','usersController@listUsers')->middleware('checkAge');
  Route::get('posts',function(){
    return route('welcome',["name"=>"john","age"=>"20"]);
  });
});
Route::get('user/{name?}/{age?}','PublicController@userInfo')->middleware('checkAge');







*/
