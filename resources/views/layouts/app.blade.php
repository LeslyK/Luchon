<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Festival') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--debut banniere-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--fin banniere-->
    <style type="text/css">
        body{
            padding-top: 20px;
            background-color: #292929
        }
        div{
            color: #FFFFFF
        }
        
    </style>
</head>
<body>
    <div class="container">        
        @include('partials.banner')
        <br>
        @include('partials.nav')
    </div><br>

    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                @yield('content')            
            </div>
            <div class="col-sm-2">
                @include('partials.nav2')
            </div>
        </div>

    </div><br>  

    <div class="container">        
        @include('partials.footer')
    </div>
   

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
