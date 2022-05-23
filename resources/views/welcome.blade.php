@extends('layouts.layout')
@section('auth')

    <div class="auth">
        <a class="auth__link auth__link--sign-in" href="{{ route('login') }}">Вход</a>
        <a class="auth__link auth__link--sign-up" href="{{ route('register') }}">Зарегистрироваться</a>
    </div>

@endsection
