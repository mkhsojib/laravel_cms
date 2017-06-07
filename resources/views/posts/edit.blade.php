@extends('layouts.app')

@section('content')
    <h1>Edit Posts</h1>
    {{--<form method="post" action="/posts/{{$post->id}}">--}}

    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['PostsController@update', $post->id]]) !!}


    <div class="form-group">

        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'title here']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('body', 'Body:') !!}
        {!! Form::text('content', null, ['class'=>'form-control', 'placeholder'=>'body here']) !!}

    </div>

    <div class="form-group">

        {!! Form::submit('Update', ['class'=>'btn btn-info']) !!}

    </div>

    {!! Form::close() !!}


    {!! Form::open(['method'=>'DELETE', 'action'=>['PostsController@destroy', $post->id]]) !!}


    <div class="form-group">

        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}

    </div>

    {!! Form::close() !!}

@endsection


@section('footer')


@endsection