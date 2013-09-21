@extends('master')

@section('title')
	{{ $post->title }}
@stop
@section('content')
	<h1> {{ $post->title }} </h1>
	<p> {{ $post->author }} </p>
	<p> {{ $post->body }} </p>

	<a href="{{ route('posts.edit', ['posts' =>$post->id]) }}">编辑</a>
	<!-- <a href="{{$post->id}}/edit">编辑</a> -->
	{{ Form::open (array('url' => 'posts/'.$post->id,'method' => 'delete')) }}
		{{ Form::submit('删除')}} 
	{{ Form::close() }}
	

	<!-- comments -->


	<h2>Comments</h2>
	
	@foreach($comments as $comment)
	  <div class="comment">
	  	{{ $comment->author }}
		{{ $comment->body }}
	
		<a href="{{ route('posts.comments.edit', ['posts' =>$comment->postId, 'comments' =>$comment->id]) }}">编辑</a>
		{{ Form::open (array('url' => 'posts/'.$post->id.'/comments/'.$comment->id,'method' => 'delete')) }}
			{{ Form::submit('删除')}} 
		{{ Form::close() }}
	  </div>
	@endforeach

	{{ Form::open (array('url' => '/posts/'.$post->id.'/comments')) }}
	<div>{{ Form::text('author') }}</div>
	<div>{{ Form::text('email') }}</div>
	<div>{{ Form::textarea('body')}}</div>
	<div>{{ Form::submit('提交评论')}} </div>
	{{ Form::close() }}


@stop