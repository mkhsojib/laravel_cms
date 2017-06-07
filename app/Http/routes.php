<?php
use App\Country;
use App\Photo;
use App\Post;
use App\Tag;
use App\User;

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

Route::get('/', function () {
    return view('welcome');

});


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

Route::get('/insert', function () {

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


//Route::get('/basicinsert', function () {
//
//    $post = new Post;
//    $post->title = 'new title inserted';
//    $post->content = 'new content inserted';
//
//
//    $post->save();
//
//});


//Route::get('/basicinsert5', function (){
//
//    $post = Post::find(5);
//    $post->title = 'new title inserted via 5';
//    $post->content = 'new content inserted via 5';
//
//
//    $post->save();
//
//});

//
//Route::get('/create', function () {
//
//    Post::create(['title' => 'this is new title6', 'content' => 'this is new content6']);
//
//});


//Route::get('/update', function () {
//
//Post::where('id', 3)->where('is_admin', 0)->update(['title'=>'sojib','content'=>'kamrul hasan sojib']);
//});


//Route::get('/delete', function (){
//
//   $post = Post::find(4);
//
//   $post->delete();
//
//});

//
//Route::get('/delete3',function (){
//
//    Post::destroy([5,6]);
//
//
////    Post::where('is_admin',0)->delete();
//
//});

//
//Route::get('/softdelete', function () {
//
//    Post::find(2)->delete();
//
//});


//Route::get('/readsoftdelete', function () {
//
////    $post = Post::find(1);
////
////    return $post;
//
////    $post = Post::withTrashed('is_admin', 0)->get();
////    return $post;
//
//
//    $post = Post::onlyTrashed()->where('is_admin', 0)->get();
//    return $post;
//
//});


//Route::get('/restore', function (){
//
//
//   Post::withTrashed('is_admin',0)->restore();
//
//});


//Route::get('/forcedelete', function () {
//
//    Post::onlyTrashed('is_admin', 0)->forceDelete();
//
//});

/*
|--------------------------------------------------------------------------
| eloquent relationship
|--------------------------------------------------------------------------

*/

// one to one relationship

//Route::get('/user/{id}/post', function ($id){
//
//   return User::find($id)->post;
//
//});


// inverse relation

//Route::get('/post/{id}/user', function ($id){
//
//    return Post::find($id)->user->name;
//
//});


// One to many relationship

//Route::get('/posts', function () {
//
//
//    $user = User::find(1);
//    foreach ($user->posts as $post) {
//
//        echo $post->title . '<br>';
//
//
//    }
//
//});


// many to many relationship

//Route::get('/user/{id}/role', function ($id){
//
//   $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
//
//   return $user;
//
////   foreach ($user->roles as $role){
////
////
////       return $role->name;
////   }
//
//});


//// Querying intermediate table
//
//Route::get('/user/pivot', function () {
//
//    $user = User::find(1);
//
//    foreach ($user->roles as $role) {
//
//        return $role->pivot->created_at;
//    }
//
//
//});
//
//// Has many through relation
//
//Route::get('/user/country', function (){
//
//$country = Country::find(3);
//
//foreach ($country->posts as $post){
//
//    return $post->title;
//}
//
//});


// Polymorphic relation

//Route::get('user/photos', function (){
//
//   $user = User::find(1);
//
//   foreach ($user->photos as $photo){
//
//
//       return $photo->path;
//   }
//
//});
//
//Route::get('post/{id}/photos', function ($id){
//
//    $post = Post::find($id);
//
//    foreach ($post->photos as $photo){
//
//
//        echo $photo->path . "<br>";
//    }
//
//});


//Route::get('photo/{id}/post', function ($id) {
//
//    $photo = Photo::findOrFail($id);
//
//    return $photo->imageable;
//
//});

// Polymorphic relation many to many

//Route::get('post/tag', function () {
//
//    $post = Post::find(1);
//
//    foreach ($post->tags as $tag){
//
//        echo $tag->name;
//    }
//});


Route::get('/tag/post', function (){

    $tag = Tag::find(2);

    foreach ($tag->posts as $post){

        echo $post->title;
    }

});