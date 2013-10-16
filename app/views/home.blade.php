@extends('layout')
@section('home')
	<div id="top" class="header">
        <div class="vert-text">
          <h1>Titan Trade</h1>
          <h3>Trading textbooks just got easier</h3>
          <a href="{{URL::to('/login') }}" class="btn btn-success btn-lg intro-btn"><i class="icon-signin"></i> Log in</a>
          <a href="{{ URL::to('/register') }}" class="btn btn-primary btn-lg intro-btn"><i class="icon-ok"></i> Sign up</a>
        </div>
    </div>
    <!-- /Full Page Image Header Area -->
  
    <!-- Intro -->
    <div id="intro" class="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h2>Textbook trading right on your campus!</h2>
            <p class="lead">Trade textbooks with people taking the same <em>exact</em> classes as you!</p>
          </div>
        </div>
      </div>
    </div>
    <!-- /Intro -->
  
    <!-- Services -->
    <div id="services" class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h2>It's easy!</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 col-md-offset-2 text-center">
            <div class="service-item">
              <i class="service-icon icon-plus"></i>
              <h4>Add Your Books</h4>
              <p>Just click <i class="icon-plus"></i> on the books page and simply enter the ISBN-10 of your book. We take care of the rest.</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item">
              <i class="service-icon icon-search"></i>
              <h4>Search For A Book</h4>
              <p>Do you know what books you need? Use the search bar to search Title, Author, ISBN, or Subject.</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item">
              <i class="service-icon icon-envelope"></i>
              <h4>Request A Trade</h4>
              <p>Send the owner of the book a request to trade. The owner will receive an email notification and either accept or decline your trade.</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item">
              <i class="service-icon icon-book"></i>
              <h4>Setup A Trade</h4>
              <p>Set a time and place to trade your books. Once both parties agree, you're trade is complete!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Services -->

    <!-- Callout -->
    <!--div class="callout">
      <div class="vert-text">
        <h1></h1>
      </div>
    </div-->
    <!-- /Callout -->

    <!-- Portfolio -->
    <div id ="portfolio" class="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Screenshots</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-2 text-center">
            <div class="portfolio-item">
              <a href="#top"><img class="img-portfolio img-responsive" src="http://placehold.it/350x245"></a>
              <h4>Add Your Books</h4>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="portfolio-item">
              <a href="#top"><img class="img-portfolio img-responsive" src="http://placehold.it/350x245"></a>
              <h4>Search For A Book</h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-2 text-center">
            <div class="portfolio-item">
              <a href="#top"><img class="img-portfolio img-responsive" src="http://placehold.it/350x245"></a>
              <h4>Request A Trade</h4>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="portfolio-item">
              <a href="#top"><img class="img-portfolio img-responsive" src="http://placehold.it/350x245"></a>
              <h4>Setup A Trade</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Portfolio -->

    <!-- Call to Action -->
    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h3>Login now or sign up!</h3>
            <a href="{{URL::to('/login') }}" class="btn btn-success btn-lg intro-btn"><i class="icon-signin"></i> Log in</a>
            <a href="{{URL::to('/register') }}" class="btn btn-primary btn-lg intro-btn"><i class="icon-ok"></i> Sign up</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /Call to Action -->

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <hr>
            <p>Copyright &copy; Titan Trade 2013</p>
          </div>
        </div>
      </div>
    </footer>
@show