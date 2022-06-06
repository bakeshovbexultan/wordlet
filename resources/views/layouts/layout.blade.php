<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wordlet</title>

    {{--  META  --}}
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--  SITE ICON  --}}
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon">
    <link type="Image/x-icon" href="/favicon.ico" rel="icon">

    {{--  FONTAWESOME  --}}
    <script src="{{ URL::asset('https://kit.fontawesome.com/2234da2371.js') }}" crossorigin="anonymous"></script>
    {{--  CSS  --}}
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    {{--  JS  --}}
    <script src="{{ URL::asset('js/script.js') }}"></script>
</head>
<body>

<header class="header">
    <ul class="nav">
        <li class="nav__li"><a class="nav__logo" href="/">Wordlet</a></li>
        <li class="nav__li nav__active"><a class="nav__link" href="/">Главная</a></li>
        @auth
            <li class="nav__li"><a class="nav__link" href="/library">Библиотека</a></li>
            <li class="nav__li"><a class="nav__link" href="/create">Создать модуль</a></li>
        @endauth
        @guest
            <li class="nav__li"><a class="nav__link" href="/create">Создать модуль</a></li>
        @endguest
    </ul>

    @auth
    <div class="profile">
        <label for="">
            <input class="profile__search" type="text">
        </label>
        <button>
            <i class="profile__notice fa-solid fa-bell"></i>
        </button>
        <button>
            <img class="profile__avatar" src="{{ $user->avatar }}" alt="Аватар пользователя">
        </button>
    </div>
    @endauth

    @guest
        @yield('auth')
    @endguest

</header>

@yield('content')

</body>
</html>
