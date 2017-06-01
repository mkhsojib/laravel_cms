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

//Route::get('/', function () {
//    return view('welcome');
//
//});


//Route::get('/posts/{id}/{name}', function ($id,$name) {
//
//
//  return 'this is post no ' .$id .' ' .$name;
//
//
//});


//Route::get('/post/{id}','PostsController@index');

//Route::resource('posts','PostsController');




//Route::get('/contact', 'PostsController@contact');
//
//Route::get('/post/{id}/{name}/{password}', 'PostsController@show_post');


/*
|--------------------------------------------------------------------------
| database raw sql queries
|--------------------------------------------------------------------------

*/

//Route::get('/insert', function (){
//
//    DB::insert('insert into posts (title, content) values (?, ?)', ['php with laravel 5.2', 'laravel is best php framework']);
//
//});


Route::get('/read', function (){

   $results =  DB::select('select * from posts where id = ?', [1]);

   return var_dump($results) ;

//   foreach ($results as $post){
//
//       return $post->title;
//
//   }

});

