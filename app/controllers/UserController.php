<?php

class UserController
extends Controller
{
	public function loginAction()
	{
		if (Input::server("REQUEST_METHOD") == "POST")
		{
			$validator = Validator::make(Input::all(), [
				"username" => "required",
				"password"  => "required"
			]);

			if ($validator->passes())
			{
				$credentials = [
					"username" => Input::get("username"),
					"password"  => Input::get("password")
				];

				if (Auth::attempt($credentials))
				{
					return Redirect::route("user/profile");
				}
			}
			else
			{
				echo "Validation failed!";
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

	public function registerAction()
	{
		if (Input::server("REQUEST_METHOD") == "POST")
		{
			$validator = Validator::make(Input::all(), [
				"username" => "required",
				"password"  => "required"
			]);

			if ($validator->passes())
			{
				$user = User::create(array("username" => Input::get("username"),
										      "password" => Hash::make(Input::get("password"))));
				$credentials = [
					"username" => Input::get("username"),
					"password"  => Input::get("password")
				];

				if (Auth::attempt($credentials))
				{
					return Redirect::route("user/profile");
				}
			}
			else
			{
				echo "Validation failed!";
			}
		}
		return View::make('user/register');
	}

}