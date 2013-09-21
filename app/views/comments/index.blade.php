	@foreach($comments as $comment)
	  <div class="comment">
	  	{{ $comment->author }}
		{{ $comment->body }}
	
		<a href="{{ route('posts.comments.edit', ['posts' =>$comment->postId, 'comments' =>$comment->id]) }}">编辑</a>
	  </div>
	@endforeach