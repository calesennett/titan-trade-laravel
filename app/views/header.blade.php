@section('header')


  <nav class="navbar navbar-default navbar-fixed-top square" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ URL::to('/') }}">Titan Trade</a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <div class="input-group navbar-right search">
            <span id="searchbar"><input type="text" class="form-control input_field" id="search" placeholder="Search"></span>
            <span class="input-group-btn">
              <button class="btn btn-info" id="search-btn"><i class="icon-search"></i></button>
            </span>
          </div>
          <ul class="nav navbar-nav navbar-right">
            @if (Auth::user())
              <li class="dropdown">
                <a id="dBooks" role="button" data-toggle="dropdown" href="#" >
                  <i class="icon-book"></i> Books <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dBooks">
                  <li><a href="{{ URL::to('books') }}"><i class="icon-eye-open"></i> View Books</a></li>
                  <li><a href="{{ URL::to('/books/create') }}"><i class="icon-plus"></i> Add a Book</a></li>
                </ul>
              </li>
              <li><a href="{{ URL::route('user/profile') }}"><i class="icon-user"></i> {{ Auth::user()->username }} </a></li>
              <li><a href="{{ URL::route('user/logout') }}"><i class="icon-signout"></i> Sign out</a></li>
            @else
              <li><a href="{{ URL::route('user/login') }}"><i class="icon-signin"></i> Log in</a></li>
              <li><a href="{{ URL::route('user/register') }}"><i class="icon-ok"></i> Sign up</a></li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
@show

