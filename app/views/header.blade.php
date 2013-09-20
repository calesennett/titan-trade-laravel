@section("header")
	<div class="header">
		<div class="container">
			<h1>Login</h1>
			@if (Auth::check())
				<a href="{{ URL::route("user/logout") }}">
					Logout of {{ Auth::user()->username }}
				</a>
				|
				<a href="{{ URL::route("user/profile") }}">
					Profile
				</a>
			@else
				<a href="{{ URL::route("user/login") }}">
					Login
				</a>
				|
				<a href="{{ URL::route("user/register") }}">
					Register
				</a>
			@endif
		</div>
	</div>
@show