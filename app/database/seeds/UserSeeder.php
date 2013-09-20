<?php

class UserSeeder
extends DatabaseSeeder
{

	public function run()
	{
		$users = [
			[
				"username" => "calesennett",
				"password"  => Hash::make("calesennett"),
				"email"         => "calesennett@gmail.com"
			]

		];

		foreach ($users as $user) {
			User::create($user);
		}
	}

}