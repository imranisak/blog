@extends("layout")

@section('content')
    <h1>{{$post->title}}</h1>

    <div>
        <p>{!!$post->body!!}</p>
    </div>
    <a href="/">Go back</a>
@endsection
