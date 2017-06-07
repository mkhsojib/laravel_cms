@extends('layouts.app')

@section('content')
    <h1>Create Posts</h1>


    {{--<form method="post" action="/posts">--}}

    {{--{!! Form::open(['url' => 'foo/bar']) !!}--}}



    {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store']) !!}

    <div class="form-group">

        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'title here']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('body', 'Body:') !!}
        {!! Form::text('content', null, ['class'=>'form-control', 'placeholder'=>'body here']) !!}

    </div>

    <div class="form-group">

    {!! Form::submit('create post', ['class'=>'btn btn-primary']) !!}

    </div>


    {!! Form::close() !!}

@endsection


@section('footer')


@endsection