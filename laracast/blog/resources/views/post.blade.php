@extends('layout')

@section('content')

<article>
    <h1> {{$post->title}}</h1>
    <h6>

        By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
    </h6>
    <div>
        <p>
           {!!$post->body!!}
        </p>
    </div>
</article>

<a href="/">Go Posts</a>

@endsection
