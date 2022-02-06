@extends("layouts.app")

@section("content")
<a href="/posts" class="btn btn-default my-2">Go Back</a>
<h1 class="my-4">{{$post->title}}</h1>
<div my-3>
    {{$post->body}}
</div>
<hr>
<small>Written on {{$post->created_at}}</small>
@endsection