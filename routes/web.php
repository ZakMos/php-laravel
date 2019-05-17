<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('blog.index');
})->name('blog.index');

Route::get('post/{id}', function ($id) {
  if ($id == 1) {
    $post = [
      'title' => 'Learining Laravel',
      'content' => 'This blog post will get you right on track with Laravel!'
    ];
  } else {
    $post = [
      'title' => 'Something else',
      'content' => 'Some other content'
    ];
  }
  return view('blog.post');
})->name('blog.post');

Route::get('about', function () {
  return view('other.about');
})->name('other.about');


Route::group(['prefix' => 'admin'], function(){

  Route::get('', function () {
    return view('admin.index');
  })->name('admin.index');

  Route::get('create', function () {
    return view('admin.create');
  })->name('admin.create');

  Route::post('create', function() {
    return "It works!";
  })->name('admin.create');

  Route::get('edit/{id}', function ($id) {
    if ($id == 1) {
      $post = [
        'title' => 'Learining Laravel',
        'content' => 'This blog post will get you right on track with Laravel!'
      ];
    } else {
      $post = [
        'title' => 'Something else',
        'content' => 'Some other content'
      ];
    }
    return view('admin.edit');
  })->name('admin.edit');

  Route::post('edit', function() {
    return "It works!";
  })->name('admin.update');

});
