<?php

class PostsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('posts')->truncate();

		$posts = array(
			['author_id' => 1, 'title' => 'post 1', 'description' => 'description 1', 'body' => 'the post 1', 'postScript' => 'PS:1' ],
			['author_id' => 1, 'title' => 'post 2', 'description' => 'description 2', 'body' => 'the post 2', 'postScript' => 'PS:2' ],
			['author_id' => 1, 'title' => 'post 3', 'description' => 'description 3', 'body' => 'the post 3', 'postScript' => 'PS:3' ],
			['author_id' => 1, 'title' => 'post 4', 'description' => 'description 4', 'body' => 'the post 4', 'postScript' => 'PS:4' ],
			['author_id' => 1, 'title' => 'post 5', 'description' => 'description 5', 'body' => 'the post 5', 'postScript' => 'PS:5' ],
			['author_id' => 1, 'title' => 'post 6', 'description' => 'description 6', 'body' => 'the post 6', 'postScript' => 'PS:6' ]
		);

		// Uncomment the below to run the seeder
		 DB::table('posts')->insert($posts);
	}

}
