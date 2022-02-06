@extends("layouts.app")

@section("content")
<a href="/posts" class="btn btn-default my-2">Go Back</a>
<h1 class="my-4">{{$post->title}}</h1>
<div my-3>
    {!!$post->body!!}
</div>
<hr>
<small>Written on {{$post->created_at}}</small>
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-default my-3">Edit</a>
<a href="/posts/{{$post->id}}/destroy" class="btn btn-default my-3">Delete</a>
@endsection