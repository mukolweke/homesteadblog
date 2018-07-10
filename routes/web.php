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
use Illuminate\Http\Request;

Route::get('/welcome', function () {
    $blogs = \App\Blog::all();
    $success='';$error= '';

    return view('welcome', ['blogs' => $blogs,'success'=> $success,'error'=> $error]);
})->name('welcome');



Route::get('/create_blog','BlogController@create');


Route::post('/create_blog','BlogController@store');


Route::delete('deleteBlog/{id}','BlogController@destroy')->where('id', '[0-9]+')->name('deleteBlog');

Route::get('/welcome/blog/{id}','BlogController@show')->where('id', '[0-9]+');


Route::get('/subscribers', function () {
    $data = '';

    return view('mails.subscribers',['message'=> $data]);
});


Route::post('/send', 'EmailController@send');


Auth::routes();


Route::get('/', 'HomeController@index')->name('home');
