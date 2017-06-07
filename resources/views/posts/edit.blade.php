@extends('layouts.app')

@section('content')
    <h1>Edit Posts</h1>
    <form method="post" action="/posts/{{$post->id}}">


        {{ csrf_field() }}

        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="title" placeholder="enter title" value="{{ $post->title }}">
        <input type="text" name="content" placeholder="enter content" value="{{ $post->content }}">

        <input type="submit" value="update">

    </form>


    <form method="post" action="/posts/{{$post->id}}">
        {{ csrf_field() }}

        <input type="hidden" name="_method" value="DELETE">

        <input type="submit" value="delete">

    </form>

@endsection


@section('footer')


@endsection