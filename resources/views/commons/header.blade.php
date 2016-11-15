<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('meta-title')</title>

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