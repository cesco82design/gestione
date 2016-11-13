<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/app.css')}}">
        <!-- Styles -->
    </head>
    <body>
        @if ( Sentinel::getUser())
            @include('commons.menu_logged')
        @else
            @include('commons.menu')
        @endif
        <section id="hero_img" class="ImgLiquid">
            <div class="overlay"></div>
            <div class="caption">
                <div class="caption-text">
                    <h2>Man at work</h2>
                    <h1>My first example on Laravel</h1>
                    <h3 class="margintop30">I need understand many things still</h3>
                </div>
            </div>
            <img src="{{ URL::asset('/assets/img/montain.jpg')}}" alt="img_montain">
        </section>


<script src="http://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ URL::asset('/assets/js/imgLiquid-min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('/assets/js/script.js')}}"></script>
    </body>
</html>
