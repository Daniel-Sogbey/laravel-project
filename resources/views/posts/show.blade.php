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
{!!Form::open(["action"=>["PostsController@destroy",$post->id],"method"=>"POST","class"=>"pull-right"])!!}
{{Form::hidden("_method","DELETE")}}
{{Form::submit('Delete',['class'=>"btn btn-danger"])}}
{!!Form::close()!!}
@endsection