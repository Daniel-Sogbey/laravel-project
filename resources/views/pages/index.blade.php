@extends("layouts.app")
@section("content")
<div class="jumbotron text-center my-5">
    <h1>Welcome to Laravel</h1>
    <p>This is the laravel application from the "Laravel from scratch" youtube series</p>
    <p>
        <a href="/login" class="btn btn-primary btn-lg" role="button">Login</a>
        <a href="/signup" class="btn btn-success btn-lg" role="button">Register</a>
    </p>
</div>
@endsection