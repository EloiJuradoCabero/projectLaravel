@extends('layout')

@section('content')

    <script src="{{asset ("assets/js/slide.js")}}"></script>
    <script src="{{asset ("assets/js/efect.js")}}"></script>

    <link rel="stylesheet" href="{{asset ("assets/css/home.css")}}">
    <!-- info pulled from http://10mosttoday.com/10-most-beautiful-forests-in-the-world/ -->

    <div class="wrapper">
        <div class="slideshows">
            <div class="slideshow slideshow--hero">
                <div class="slides">
                    <div class="slide slide1"></div>
                    <div class="slide slide2"></div>
                    <div class="slide slide3"></div>
                </div>
            </div>
            <div class="slideshow slideshow--contrast slideshow--contrast--before">
                <div class="slides">
                    <div class="slide slide1"></div>
                    <div class="slide slide2"></div>
                    <div class="slide slide3"></div>
                </div>
            </div>
            <div class="slideshow slideshow--contrast slideshow--contrast--after">
                <div class="slides">
                    <div class="slide slide1"></div>
                    <div class="slide slide2"></div>
                    <div class="slide slide3"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <h1 class="title">BENVINGUTS A LA TECNOLOGIA DEL FUTUR</h1>
        <hr class="linia">

        <div class="text">
            <p class="exp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mi tortor, rutrum non est sed, volutpat feugiat leo. Proin pulvinar ut justo blandit rutrum. In hac habitasse platea dictumst. Aliquam rhoncus magna at ipsum commodo dignissim. Fusce eleifend massa lacus, quis pulvinar ipsum dignissim ac.</p>
            <img class="img" src="{{asset('assets/img/padel-tennis.jpg')}}" alt="">
        </div>

        <h1 class="title2">ELS PRODUCTES</h1>
        <hr class="linia">

        <div class="photos">
            <img class="photo1" src="{{asset ('assets/img/imagen1.png')}}">
            <img class="photo2" src="{{asset ('assets/img/imagen2.png')}}">
            <img class="photo3" src="{{asset ('assets/img/imagen3.png')}}">

        </div>
        <div class="buttons">
            <a class="btn btn-dark btn-dark-1" href="{{route('luz')}}">Accedir-hi</a>
            <a class="btn btn-dark btn-dark-2" href="{{route('calendar')}}">Accedir-hi</a>
            <a class="btn btn-dark btn-dark-3" href="{{route('key')}}">Accedir-hi</a>
        </div>
    </div>


@endsection
