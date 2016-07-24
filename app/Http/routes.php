<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'uses' => 'PostController@getBlogIndex',
	'as' => 'blog.index'
]);

Route::get('/blog', [
	'uses' => 'PostController@getBlogIndex',
	'as' => 'blog.index'
]);

Route::get('/blog/{post_id}', [
	'uses' => 'PostController@getSinglePost',
	'as' => 'blog.single'
]);

Route::get('/about', function(){
	return view('frontend.other.about');
})->name('about');

Route::get('/contact', [
	'uses' => 'ContactMessageController@getContactIndex',
	'as' => 'contact'
]);

Route::post('/contact/sendmail', [
	'uses' => 'ContactMessageController@postSendMessage',
	'as' => 'contact.send'
]);

Route::get('/admin/login', [
	'uses' => 'AdminController@getLogin',
	'as' => 'admin.login'
]);

Route::post('/admin/login', [
	'uses' => 'AdminController@postLogin',
	'as' => 'admin.login'
]);

Route::group(['prefix' => '/admin', 'middleware' => 'auth'],function(){
	Route::get('/', [
		'uses' => 'AdminController@getIndex',
		'as' => 'admin.index'
	]);

	Route::get('/logout', [
		'uses' => 'AdminController@getLogout',
		'as' => 'admin.logout'
	]);

	Route::get('/blog/posts/create', [
		'uses' => 'PostController@getCreatePost',
		'as' => 'admin.blog.create_post'
	]);

	Route::post('/blog/posts/create', [
		'uses' => 'PostController@postCreatePost',
		'as' => 'admin.blog.post.create'
	]);

});
