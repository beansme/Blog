<?php

class PostsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$posts = Post::all();
        return View::make('posts.index',compact('posts'));
         // return View::make('posts.index')->with(array('posts' => $posts));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *POST /posts
	 * @return Response
	 */
	public function store()
	{
		$post = new Post;
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->save();
		return Redirect::route('posts.show',['posts'=>$post->id]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{	
		$post = Post::find($id);

        return View::make('posts.show',compact('post'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
        return View::make('posts.edit',compact('post'));
	}

	/**
	 * Update the specified resource in storage.
	 *PUT /posts/$id
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->save();
		return Redirect::route('posts.show',['posts'=>$post->id]);
	}

	/**
	 * Remove the specified resource from storage.
	 *DELETE /posts/$id
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();
		return Redirect::route('posts.index');
	}

}
