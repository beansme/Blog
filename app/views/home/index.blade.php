@extends('master')


@section('content')
	 {{ Form::open(array('url' => '/')) }}
	 	{{ Form::text('firstName') }}
	 {{ Form::close()}}
@stop