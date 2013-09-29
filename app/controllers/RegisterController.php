<?php

class RegisterController
extends Controller
{

	/*
	 *
	 * Inject $user dependency
	 *
	 */
	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function store()
	{
		$user = $this->user->signUp(Input::all());
		Auth::login($user);
		return View::make('user.profile');
	}
}