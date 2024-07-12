@foreach($topics as $topic)
   <h3><a href="{{route('topics.show',$topic)}}">{{$topic->title}}</a>({{$topic->posts->count()}} posts)</h3>
   <h4>by {{$topic->user->name}}</h4><br>
@endforeach