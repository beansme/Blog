<?php

class CommentsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('comments')->truncate();

		$comments = array(
			['postId' => 2, 'author' => 'Tom', 'body' => 'hello 2'],
			['postId' => 2, 'author' => 'Tom', 'body' => 'hello 3'],
			['postId' => 2, 'author' => 'Tom', 'body' => 'hello 4'],
			['postId' => 2, 'author' => 'Tom', 'body' => 'hello 5'],
		);

		// Uncomment the below to run the seeder
		DB::table('comments')->insert($comments);
	}

}
