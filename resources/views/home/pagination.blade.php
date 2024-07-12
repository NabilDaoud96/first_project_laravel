@extends('templates.default')

@section('content')


    @foreach($posts as $post)
    <h2>{{$post->title}}</h2>
    <p>{{$post->content}}</p><br><br>
    @endforeach

    {{$posts->render()}}


@endsection