<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
        <link rel="stylesheet" href="{{asset('css/estilo.css?v=1')}}">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" /> 

        <title><?php echo $title; ?></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,600,700,800,900" rel="stylesheet" type="text/css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="{{asset('/plugins/colorbox/jquery.colorbox.js')}}"></script>
        <script src="{{asset('/plugins/colorbox/colorbox.css')}}"></script>
        
        <link rel="stylesheet" type="text/css" href="{{asset('/plugins/wow/style.css')}}" />

        
    </head>
    <body>
        @yield('content')

        <script type='text/javascript'>
            window.onload = detectarCarga;
            function detectarCarga(){
            $(document).ready(function(){
            $(document).ready(function () {
            $('#loading').fadeOut(800);
            });
            });
            }
        </script>
    </body>
</html>
