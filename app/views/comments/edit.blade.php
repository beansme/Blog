{{ Form::open (array('url' => '/posts/'.$comment->postId.'/comments/'.$comment->id, 'method' => 'put' )) }}
	<div>{{ Form::textarea('body',$comment->body)}}</div>
	<div>{{ Form::submit('确认修改')}} </div>
{{ Form::close() }}