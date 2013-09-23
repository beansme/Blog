@extends('layouts.master')

@section('content')
	<p>hello! {{ Auth::user()->username }}</p>

	<ul>
	  @foreach ($posts as $post)
	
		<div class="term">
			<li> {{$post->title}} {{ HTML::link('posts/'.$post->id.'/edit' ,"编辑") }} 
		{{ Form::close()}}  </li>
		</div>
	
	  @endforeach
	</ul>
@stop


		