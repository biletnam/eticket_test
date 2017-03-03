<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title> {{$title}} </title>
        
        <!-- Fonts -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

        <!-- Styles -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
            <link href="{{ URL::asset('css/base.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="{{ URL::asset('js/base.js') }}"></script>
        <script src="{{ URL::asset('js/easy_link.js') }}"></script>
    </body>
</html>