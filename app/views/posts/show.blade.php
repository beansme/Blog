@extends('master')

@section('title')
	{{ $post->title }}
@stop
@section('content')
	<h1> {{ $post->title }} </h1>
	<p> {{ $post->author }} </p>
	<p> {{ $post->body }} </p>

	<!-- <a href="{{ route('posts.edit', ['posts' =>$post->id]) }}">编辑</a> -->
	<a href="{{$post->id}}/edit">编辑</a>
	{{ Form::open (array('url' => 'posts/'.$post->id,'method' => 'delete')) }}
		{{ Form::submit('删除')}} 
	{{ Form::close() }}

@stop