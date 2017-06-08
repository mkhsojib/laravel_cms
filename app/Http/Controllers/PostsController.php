<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\CreatePostRequestRequest;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        $posts = Post::latest();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function store(CreatePostRequest $request)
    {

//        $this->validate($request, [
//            'title' => 'required|max:3',
//            'content' => 'required',
//
//        ]);

//        return $request->all();

        Post::create($request->all());

        return redirect('/posts');

//        $input = $request->all();
//
//        $input['title'] = $request->title;
//
//        Post::create($request->all());


//        $post = new Post;
//
//        $post->title = $request->title;
//
//        $post->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return string
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return array
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->update($request->all());

        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect('posts');
    }

    public function contact()
    {

        $people = ['sojib', 'kamrul', 'hasan'];

//        $people = ['this is people'];

        return view('contact', compact('people'));

    }

    public function show_post($id, $name, $password)
    {

        //  return view('post')->with('id', $id);
        return view('post', compact('id', 'name', 'password'));
    }
}
