<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('users')->truncate();

		$users = array(
			['username' => 'troy', 'password' => Hash::make('123')],
			['username' => 'jane', 'password' => Hash::make('123')]
		);

		// Uncomment the below to run the seeder
		 DB::table('users')->insert($users);
	}

}
