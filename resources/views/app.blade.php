<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <!-- Latest compiled and minified CSS & JS 
        <link rel="stylesheet" media="screen" href="/css/bootstrap.min.css">
        -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        @yield('styles')

      
    </head>
    <body>
        <div class="container">

            @include('partials.navbar')
             @include('flash::message')
            @yield('content')
        </div>

        <script src="//code.jquery.com/jquery.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        @yield('script')
        <script type="text/javascript">
             $('#flash-overlay-modal').modal();
        </script>
    </body>
</html>