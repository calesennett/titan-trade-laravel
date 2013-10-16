<!DOCTYPE html>
<html lang=”en”>
    <head>
        <title>Titan Trade</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta charset="UTF-8" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
        @if(Request::url() === 'http://localhost:8000')
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href="/css/main.css" rel="stylesheet">
        @endif
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/style.css" /> 
        <script type="text/javascript" src="/js/script.js"></script>
    </head>
    <body>
        @include('header')
        <div class="content">
            <div class="container">
                @yield('books')
                @yield('content')
            </div>
        </div>
    </body>
</html>
