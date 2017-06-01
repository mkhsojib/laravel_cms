<?php
use App\Post;

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

Route::get('/insert', function (){

    DB::insert('insert into posts (title, content) values (?, ?)', ['laravel just wow', 'laravel yammy ']);

});


//Route::get('/read', function (){
//
//   $results =  DB::select('select * from posts where id = ?', [1]);
//
//   return var_dump($results) ;
//
////   foreach ($results as $post){
////
////       return $post->title;
////
////   }
//
//});


//Route::get('update', function (){
//
//    $updated = DB::update('update posts set title ="title updated" where id=?', [1]);
//
//    return $updated;
//
//});


//Route::get('delete', function (){
//
//    $deleted = DB::delete('delete from posts where id =?', [1]);
//
//    return $deleted;
//});



/*
|--------------------------------------------------------------------------
| eloquent
|--------------------------------------------------------------------------

*/




//Route::get('/read', function (){
//
//$posts = Post::all();
//
//foreach ($posts as $post){
//
//
//    return $post->title;
//}
//
//
//});



//Route::get('/id', function (){
//
//    $post = Post::find(2);
//
//    return $post->title;
//
//
//
//});


//Route::get('findwhere', function (){
//
//   $posts = Post::where('id', 3)->orderBy('id','desc')->take(1)->get();
//
//   return $posts;
//});


//Route::get('/findmore',function (){
//
//
////   $posts = Post::findOrFail(2);
////
////   return $posts;
//
//    $posts = Post::where('users_count', '<', 50)->firstOrFail();
//
//});



//Route::get('basicinsert', function (){
//
//   $post = new Post;
//   $post->title = 'new title inserted';
//   $post->content = 'new content inserted';
//
//
//   $post->save();
//
//});



Route::get('basicinsert5', function (){

    $post = Post::find(5);
    $post->title = 'new title inserted via 5';
    $post->content = 'new content inserted via 5';


    $post->save();

});