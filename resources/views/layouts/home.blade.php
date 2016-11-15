@extends('layouts.default')

@section('content')
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
@stop