@extends('master')

@section('content')
	{{ Form::open (array('url' => '/posts')) }}
		<div>{{ Form::text('title') }}</div>
		<div>{{ Form::textarea('body')}}</div>
		<div>{{ Form::submit('提交')}} </div>
	{{ Form::close() }}
@stop