@extends('master')

@section('content')
	{{ Form::open (array('url' => 'posts/'.$post->id,'method' => 'put')) }}
		<div>{{ Form::text('title',$post->title) }}</div>
		<div>{{ Form::textarea('body',$post->body)}}</div>
		<div>{{ Form::submit('确认修改')}} </div>
	{{ Form::close() }}
@stop