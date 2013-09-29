<?php

class UserController
extends Controller
{
	public function loginAction()
	{

		$credentials = [
			["email"     => Input::get("username"),
			 "password"  => Input::get("password")],
			["username"  => Input::get("username"),
			 "password"  => Input::get("password")]
		];

		foreach ($credentials as $credential) 
		{
			if (Auth::attempt($credential))
			{
				return Redirect::route("user/profile");
			}
		}
		return View::make('user/login');

	}

	public function profileAction()
	{
		return View::make('user/profile');
	}

	public function logoutAction()
	{
		Auth::logout();
		return Redirect::route('user/login');
	}

}