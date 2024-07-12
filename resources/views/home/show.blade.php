@extends('templates.default')

@section('content')

    <h2>{{$post->title}}</h2>
    <p>{{$post->content}}</p>
    <p>{{$post->created_at->diffForHumans()}}</p>
    {{--<p>{{$post->created_at->Format('H:i')}}</p>--}}    {{--  Carbon.php--}}



    {{--@foreach($posts as $post)--}}
        {{--<h2>{{$post->title}}</h2>--}}
        {{--<p>{{$post->content}}</p>--}}
    {{--@endforeach--}}




@endsection