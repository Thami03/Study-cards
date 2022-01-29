<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
        <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>
<body class="bg-gradient-primary" justify-content="center">

 <div class="container-fluid" > 
    
    <br><br><br><br><br>
    <br><br><br><br><br>


   <font  size="10px" face="Helvetica" color="white" > Study-cards </font>

   <p>  <a href="{{route('home')}}"  
            role="button"> <font left="15px" color="white" size="4px" face="Helvetica"> Entrar </font> </a> 
        </a>
   </p>

 </div>


     <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
</body>
</html>
