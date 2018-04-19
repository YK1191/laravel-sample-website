<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Acme</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.csslar">
</head>
<body>
@include('inc.navbar')
<div class="container">
    @if(Request::is('/'))
        @include('inc.showcase')
    @endif
    <div class="row">
       <div class="col-md-8 col-lg-8">
            @include('inc.messages')
            @yield('content')    
       </div>
        <div class="col-md-4 col-lg-4">
            @include('inc.sidebar')
       </div>
    </div>
</div>

<footer id="footer" class="text-center">
    <p>Copyright 2018 &copy; Acme</p>
</footer>
</body>
</html>