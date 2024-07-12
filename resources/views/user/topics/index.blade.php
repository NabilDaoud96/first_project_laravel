@foreach($topics as $topic)
    <h3><a href="{{route('topics.show',$topic)}}">{{$topic->title}}</a></h3>
    <h4>by {{$topic->created_at->diffForHumans()}}</h4><br>
@endforeach