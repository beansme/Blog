@extends('layouts.master')

@section('content')


	{{ Form::open(array('route' => 'posts.store', 'files'=>true)) }}

		<!-- author -->
		{{ Form::hidden('author_id', Auth::user()->id) }}
	    <!-- title field -->
		<p>{{ Form::label('title', '标题') }}</p>
		{{ $errors->first('title', '<p class="error">:message</p>') }}
		<p>{{ Form::text('title', Input::old('title'))}}</p>
	    <!-- description field -->
		<p>{{ Form::label('description', '描述') }}</p>
		{{ $errors->first('description', '<p class="error">:message</p>') }}
		<p>{{ Form::textarea('description', Input::old('description')) }}</p>
		<!-- body field -->
		<p>{{ Form::label('body', '正文') }}</p>
		{{ $errors->first('body', '<p class="error">:message</p>') }}
		<p>{{ Form::textarea('body', Input::old('body'))}}</p>
        <p>{{ Form::label('file', '附件上传') }}</p>
        <p>
        {{ Form::file('file') }}
        </p>
        <!-- tags field -->
		<p>{{ Form::label('tags', '标签') }}</p>
		{{ $errors->first('tags', '<p class="error">:message</p>') }}
		<p>{{ Form::text('tags', Input::old('tags')) }}</p>
		<!-- submit button -->
		<p>{{ Form::submit('发表') }}</p>

	{{ Form::close() }}

@stop