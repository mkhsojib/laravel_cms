@extends('layouts.app')

@section('content')
<h1>Create Posts</h1>
    <form method="post" action="/posts">
        {{ csrf_field() }}
        <input type="text" name="title" placeholder="enter title">
        <input type="text" name="content" placeholder="enter content">

        <input type="submit" value="submit">

    </form>

@endsection


@section('footer')


@endsection