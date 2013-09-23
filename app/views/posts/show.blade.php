@extends('layouts.master')

@section('title')
	{{ $post->title }}
@stop
@section('content')
	<h1> {{ $post->title }} </h1>
	<p> 作者:{{ $post->author->username}}   最后发表：{{ date('Y-m-d', strtotime($post->updated_at)) }} 浏览次数：{{ $post->views}} </p>
	<p> {{ "描述：".$post->description}} </p>


	@if ($post->picture)
		<img src="{{ asset('data').'/'.$post->picture }}" alt="">
	@endif

	<p> {{ $post->body }} </p>
	
	@if (Auth::check() && Auth::user()->id == $post->author->id) 
		<a href="{{ route('posts.edit', ['posts' =>$post->id]) }}">编辑</a>
		{{ Form::open(['route' => ['posts.destroy',$post->id], 'method' => 'delete'])}}
		{{ Form::submit('删除')}} 
		{{ Form::close()}}
	@endif

	<!-- comments -->

	<h2>Comments</h2>
	
	@foreach($post->comments as $comment)
	  <div class="comment">
	  	{{ $comment->author }}
		{{ $comment->body }}
	
		<a href="{{ route('posts.comments.edit', ['posts' => $comment->post_id, 'comments' =>$comment->id]) }}">编辑</a>

		{{ Form::open(['route' => ['posts.comments.destroy',$comment->post_id,$comment->id], 'method' => 'delete'])}}
			{{ Form::submit('删除')}} 
		{{ Form::close()}}
	  </div>
	@endforeach

	@include('comments.create');

@stop