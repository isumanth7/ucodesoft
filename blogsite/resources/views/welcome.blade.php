@extends('layouts.master')
@section('content')
<div class="title m-b-md">
    {!!$title!!}
</div>
<div class="content">
  @foreach($posts as $post)
  <li>{{$post->title}}</li>
  @endforeach
</div>
<div class="links">
    <a href="https://laravel.com/docs">Docs</a>
    <a href="https://laracasts.com">Laracasts</a>
    <a href="https://laravel-news.com">News</a>
    <a href="https://blog.laravel.com">Blog</a>
    <a href="https://nova.laravel.com">Nova</a>
    <a href="https://forge.laravel.com">Forge</a>
    <a href="https://github.com/laravel/laravel">GitHub</a>
</div>
@endsection('content')
