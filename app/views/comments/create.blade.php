{{ Form::open (array('url' => '/posts')) }}
	<div>{{ Form::text('author') }}</div>
	<div>{{ Form::text('email') }}</div>
	<div>{{ Form::textarea('body')}}</div>
	<div>{{ Form::submit('提交')}} </div>
{{ Form::close() }}