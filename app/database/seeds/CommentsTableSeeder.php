<?php

class CommentsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('comments')->truncate();

		$comments = array(
			['post_id' => 2, 'author' => 'Tom', 'body' => 'hello 2'],
			['post_id' => 2, 'author' => 'Tom', 'body' => 'hello 3'],
			['post_id' => 2, 'author' => 'Tom', 'body' => 'hello 4'],
			['post_id' => 2, 'author' => 'Tom', 'body' => 'hello 5'],
		);

		// Uncomment the below to run the seeder
		DB::table('comments')->insert($comments);
	}

}
