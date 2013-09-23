	@foreach($comments as $comment)
	  <div class="comment">
	  	{{ $comment->author }}
		{{ $comment->body }}
	
		<a href="{{ route('posts.comments.edit', ['posts' =>$comment->post_id, 'comments' =>$comment->id]) }}">编辑</a>

		{{ Form::open(['route' => ['posts.comments.destroy',$comment->post_id,$comment->id], 'method' => 'delete'])}}
			{{ Form::submit('删除')}} 
		{{ Form::close()}}
		
	  </div>
	@endforeach