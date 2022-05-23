<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wordlet</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon">
    <link type="Image/x-icon" href="/favicon.ico" rel="icon">
    <script src="{{ URL::asset('js/script.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('https://use.fontawesome.com/releases/v5.15.4/css/all.css') }}" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

</head>
<body>

<header class="header">
    <div class="nav">
        <a class="nav__logo" href="/">Wordlet</a>
        <a class="nav__link" href="/">Главная</a>
        <a class="nav__link" href="/library">Библиотека</a>
        <a class="nav__link" href="/create-set">Создать модуль</a>
    </div>
    <div class="profile">
        <i class="fa-solid fa-bell"></i>
    </div>

    @yield('auth')

</header>

@yield('content')

</body>
</html>
