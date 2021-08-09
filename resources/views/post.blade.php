@extends("layout")

@section('content')
    <h1>{{$post->title}}</h1>
    <a>
        <a href="#">{{$post->category->name}}</a>
    </a>
    <div>
        {!!$post->body!!}
    </div>
    <a href="/">Go back</a>
@endsection
