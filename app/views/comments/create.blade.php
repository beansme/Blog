{{ Form::open (['route' => ['posts.comments.store', $post->id]]) }}
	
	<p>{{ Form::label('author', 'nickname')}}</p>
	<p>{{ Form::text('author') }}</p>

	<p>{{ Form::label('email', 'email')}}</p>
	<p>{{ Form::text('email') }}</p>

	<p>{{ Form::label('body', 'comment')}}	</p>
	<p>{{ Form::textarea('body')}}</p>

	<p>{{ Form::submit('提交')}} </p>

	@include ('_partials.errors')
{{ Form::close() }}