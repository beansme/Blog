@extends('layouts.master')

@section('content')

  <ul class="posts">
  	@foreach ($posts as $post)	
	  <li>
	  	<a href="{{ route('posts.show', ['posts' =>$post->id]) }}">
			{{ $post->title }}
	  	</a>
	  </li>
	@endforeach
  </ul>
	
  {{ $posts->links() }}
@stop