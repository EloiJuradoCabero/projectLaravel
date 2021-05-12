<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>
<header>
    <div class="divMenu">
        <div class="image">
            <a href="{{route ('home')}}">
            <img class="logo" src="{{asset ('assets/img/reservaplay_verd.png')}}" alt="">
            </a>
        </div>
        <ul class="menu">
            <li>
                <a class="login" href="{{route ('login')}}">Accedir-hi</a>
            </li>
        </ul>
    </div>
    <div class="divMenu2">
        <ul class="menu2">
            <li>
                <a class="clubs" href="{{route('clubs')}}">Mostrar Clubs</a>
                <a class="who" href="{{route('who')}}">Qui som</a>
                <a class="where" href="{{route ('where')}}">On Som</a>
                <a class="idk" href="{{route ('where')}}">On Som</a>
                <a class="contact" href="{{route ('contact')}}">Contactan's</a>
            </li>
        </ul>
    </div>
</header>

    <div class="field">
        @yield('content')
    </div>

    <footer>
        <div class="social">
            <a href="www.instagram.es">
                <i class="icon ion-social-instagram"></i>
            </a>
            <a href="www.snapchat.es">
                <i class="icon ion-social-snapchat"></i>
            </a>
            <a href="www.twitter.es">
                <i class="icon ion-social-twitter"></i>
            </a>
            <a href="www.facebook.es"><i class="icon ion-social-facebook"></i>
            </a>
        </div>

        <p class="copyright">PlayGame © 2021</p>
    </footer>

</body>
</html>
