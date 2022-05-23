
@extends('layouts.layout')
@section('auth')


    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 ">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
    
    <div class="auth">
        <a class="auth__link auth__link--sign-in" href="#">Вход</a>
        <a class="auth__link auth__link--sign-up" href="#">Зарегистрироваться</a>
    </div>

@endsection

@section('content')









@endsection
