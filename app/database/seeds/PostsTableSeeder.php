<?php

class PostsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('posts')->truncate();

		$posts = array(
			['author' => 'troy', 'title' => 'post 1', 'body' => 'the post 1' ],
			['author' => 'jane', 'title' => 'post 2', 'body' => 'the post 2' ],
			['author' => 'troy', 'title' => 'post 3', 'body' => 'the post 3' ],
			['author' => 'troy', 'title' => 'post 4', 'body' => 'the post 4' ],
			['author' => 'troy', 'title' => 'post 5', 'body' => 'the post 5' ],
			['author' => 'troy', 'title' => 'post 6', 'body' => 'the post 6' ]
		);

		// Uncomment the below to run the seeder
		 DB::table('posts')->insert($posts);
	}

}
