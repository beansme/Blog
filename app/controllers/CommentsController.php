<?php

class CommentsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	// public function index($postId)
	// {
	// 	$comments = Comment::where('postId', '=', $postId)->get();
 //        return View::make('comments.index',compact('comments'));
	// }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	// public function create()
	// {
 //        return View::make('comments.create');
	// }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($postId)
	{
		$comment = new Comment;
		$comment->postId = $postId;
		$comment->author = Input::get('author');
		$comment->email = Input::get('email');
		$comment->body = Input::get('body');
		$comment->save();
		return Redirect::route('posts.show',['posts'=>$postId]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($postId,$commentId)
	{
        // return View::make('comments.show');
        return "comment id of ".$commentId." posts id of ".$postId;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$comment = Comment::find($id);
        return View::make('comments.edit',compact('comment'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$comment = Comment::find($id);
		$comment->body = Input::get('body');
		$comment->save();
		return Redirect::route('posts.show',['posts'=>$comment->postId]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($postId,$commentId)
	{
		$comment = Comment::find($commentId);
		$comment->delete();
		return Redirect::route('posts.show',['posts'=>$postId]);
	}

}
