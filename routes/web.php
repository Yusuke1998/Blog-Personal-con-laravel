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
// Route::get('/',function(){
// 	return redirect('/login');
// });

Route::get('/',[ 
	'as'	=>	'Inicio',
	'uses'	=>	'HomeController@indexAdmin'
]);

Route::get('categories/{name}',[
	'as'	=>	'category.name',
	'uses'	=>	'HomeController@searchCategory'
]);

Route::get('tags/{name}',[
	'as'	=>	'tag.name',
	'uses'	=>	'HomeController@searchTag'
]);

Route::get('article/{id}',[
	'as'	=>	'view.article',
	'uses'	=>	'HomeController@viewArticle'
]);

Route::group(['prefix'=>'admin', 'as' => 'admin.', 'middleware'=>'auth'],function(){
	
	Route::get('index','HomeController@indexAdmin');
	Route::resource('users','UsersController');
	Route::resource('categories','CategoriesController');
	Route::resource('tags','TagsController');
	Route::resource('articles','ArticlesController');
	Route::get('/images',[
		'as'	=>	'images.index',
		'uses'	=>	'ImagesController@index'
	]);

});

Auth::routes('admin');
