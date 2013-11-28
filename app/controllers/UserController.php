<?php

class UserController
extends Controller
{

	public function __construct(Book $book, User $user)
	{
		$this->user = $user;
		$this->book = $book;
	}

	public function show($username)
	{
		$user = $this->user->where('username', $username)->first();
		$books = $this->book->where('user_id', $user->id)->groupBy('title')->orderBy('title')->get();
		return View::make('user.public', compact('books'))->with('user', $user);

	}

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
				return Redirect::route('user/profile', compact('books'));
			}
		}
		return Redirect::route('user/login')->with('flash_message', 'Invalid username or password.');

	}

	public function profileAction()
	{
		$books = $this->book->where('user_id', Auth::user()->id)->groupBy('title')->get();
		return View::make('user/profile', compact('books'));
	}

	public function logoutAction()
	{
		Auth::logout();
		return Redirect::route('user/login');
	}

}