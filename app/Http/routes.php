<?php
Route::get('/','PostsController@index');
Route::get('/allposts','PostsController@allposts');
//Route::get('/posts/{post}','PostsController@show');
Route::get('/posts/create', 'PostsController@create');
Route::get('posts/{posts}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');

/*
posts

GET/posts

GET/posts/create

POST /posts convention is to call it store

GET/posts/{id}/edit

GET/posts/{id}

PATCH/posts/{id}
DELETE /posts/{id}


/*View::composer('stats', function($view){
  $view->with('stats',app('App\Stats'));
});
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

/*Laravel Query Builder */
