@extends('layouts.app')


@section('content')

    <h1>this is contact page</h1>

    @if(count($people))

        <ul>
            @foreach($people as $person)

                <li>{{ $person }}</li>

            @endforeach
        </ul>

    @endif
@stop


@section('footer')

    {{--<script>alert('hello contact')</script>--}}
@stop