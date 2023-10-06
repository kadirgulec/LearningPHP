@extends('layout')

@section('content')

<article>
    <h1> {{$post->title}}</h1>
    <h6>
        <a href="">{{$post->category->name}}</a>
    </h6>
    <div>
        <p>
           {!!$post->body!!}
        </p>
    </div>
</article>

<a href="/">Go Posts</a>

@endsection
