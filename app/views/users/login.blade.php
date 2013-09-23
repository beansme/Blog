@extends('layouts.master')

@section('content')
	{{ Form::open(['url' => 'users/login'])}}
		{{ Form::label('username','用户名：')}}
		{{ Form::text('username') }}
		{{ Form::label('password','密码：')}}
		{{ Form::password('password') }}
		{{ Form::submit('登陆') }}
	{{ Form::close()}}
	
	@if (Session::has('login_errors'))
		<span>用户密码错误</span>
	@endif

@stop