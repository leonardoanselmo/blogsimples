@extends('template')

@section('title')
    Posts
@stop

@section('content')

    <h1>Posts</h1>

    <ul>
        @foreach($posts as $post)
            <li>{{ $post }}</<li>
        @endforeach
    </ul>

@stop