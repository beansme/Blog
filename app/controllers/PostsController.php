<?php

class PostsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$posts = Post::where('id', '>', 0)->paginate(3);

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
		if (Auth::user()) {
        	return View::make('posts.create');
		}

        return Redirect::to('/');
	}

	/**
	 * Store a newly created resource in storage.
	 *POST /posts
	 * @return Response
	 */
	public function store()
	{
		$rule = [
			'title' => 'required|min:3|max:200',
			'body' => 'required',
			'file' => 'mimes:jpg,jpeg,gif,png,bmp'
		];


		$title = Input::get('title');
		$body = Input::get('body');
		$description = Input::get('description');
		if(empty($description)) $description = substr($body,0, 120);
		$author_id =Input::get('author_id');
		$tags =Input::get('tags');
		if (Input::hasFile('file'))
		{
			$file = Input::file('file');
			$ext = $file->guessClientExtension();
			$filename = $file->getClientOriginalName();
			$file->move(public_path().'/data', md5(date('YmdHis').$filename).'.'.$ext);
			$picture = md5(date('YmdHis').$filename).'.'.$ext;
		}
		$new_post = array(
		'title' 	=> $title,
		'description' 	=> $description,
		'body' 		=> $body,
		'author_id' => $author_id,
		'views' => 0,
		'picture'   => $picture,
		'tags'   => $tags
		);

		$validation = Validator::make($new_post, $rule);
		
		if ($validation->passes()) {
			$post = new Post($new_post);
			$post->save();
			// Post::create($input);

			// return Redirect::route('posts.index');
			return Redirect::route('posts.show',['posts'=>$post->id]);
		}

		return Redirect::back()->withInput()->withErrors($validation);
		// $post = new Post;
		// $post->title = Input::get('title');
		// $post->body = Input::get('body');
		// $post->save();
		// return Redirect::route('posts.show',['posts'=>$post->id]);
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
		$post->views += 1;
		$post->save();
		// $author = Post::find($id)->users;
		// $comments = Comment::where('post_id', '=', $id)->get();
		// $comments = Post::find($id)->comments;
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
		if (Auth::user()) {
        	$post = Post::find($id);
        	return View::make('posts.edit',compact('post'));
		}

        return Redirect::to('/');
		
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
		if (Auth::user()) {
        	$post = Post::find($id);
        	if (Auth::user()->id == $post->author_id)
				$post->delete();

			return Redirect::route('posts.index');
		}
		return Redirect::to('/');
		
	}


}
