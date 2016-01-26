<?php

Route::group(['middleware' => 'web'], function () {
	
	Route::get('about', 'PagesController@about');
	Route::get('contact', 'PagesController@contact');
	Route::get('foo', ['middleware' => 'manager', function(){
		return 'this is the manager page';
	}]);

	Route::resource('articles', 'ArticlesController');

    Route::auth();
    Route::get('/home', 'HomeController@index');
});
