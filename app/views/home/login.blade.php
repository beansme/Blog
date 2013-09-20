@extends('master')

@section('content')
	{{ Form::open(array('url' => 'login'))}}
		{{ Form::label('username','用户名：')}}
		{{ Form::text('username') }}
		{{ Form::label('password','密码：')}}
		{{ Form::password('password') }}
		{{ Form::submit('登陆') }}
	{{ Form::close()}}
@stop