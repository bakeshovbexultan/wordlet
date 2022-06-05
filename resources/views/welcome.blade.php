@extends('layouts.layout')
@section('auth')

    <div class="auth">
        <a class="auth__link auth__link--sign-in" href="{{ route('login') }}">Вход</a>
        <a class="auth__link auth__link--sign-up" href="{{ route('register') }}">Зарегистрироваться</a>
    </div>

@endsection

@section('content')

    <div class="welcome">
        <div class="welcome__bg--image">
            <div class="welcome__bg--panel container container--center">
                <div class="welcome__bg--text">
                    <div class="welcome__bg--left">
                        <h2 class="welcome__bg--left-header">Достигайте лучших возможных результатов</h2>
                        <p class="welcome__bg--left-text">Шаг за шагом изучайте любой предмет</p>
                    </div>
                    <div class="welcome__bg--right">
                        <button class="welcome__bg--btn"><a class="welcome__bg--sign-up" href="#">Начать</a></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container container--center">
            <h2 class="welcome__title">
                90% учеников, использующих Wordlet, говорят, что их успеваемость улучшилась.
            </h2>

            <div class="welcome__block">
                <div class="welcome__text">
                    <h3 class="welcome__block--header">Ваш ум, наше – все остальное.</h3>
                    <p class="welcome__block--text">От карточек, удобных для изучения иностранных языков, до игр на любую тему – в Quzlet есть множество средств, которые подойдут именно вам.</p>
                </div>
                <div class="welcome__img">
                    <img class="welcome__block--img" src="uploads/welcome/1.png" alt="">
                </div>
            </div>

            <div class="welcome__block">
                <div class="welcome__img">
                    <img class="welcome__block--img" src="uploads/welcome/2.png" alt="">
                </div>
                <div class="welcome__text">
                    <h3 class="welcome__block--header">Ваш следующий успех – не за горами.</h3>
                    <p class="welcome__block--text">Каждый новый факт, который вы запоминаете – это достижение. Quizlet разбивает предметы и темы на части, чтобы облегчить запоминание и сделать овладение материалом поэтапным.</p>
                </div>
            </div>

            <div class="welcome__block">
                <div class="welcome__text">
                    <h3 class="welcome__block--header">Не теряйте мотивации. Выучите материал раз и навсегда.</h3>
                    <p class="welcome__block--text">Когда даже небольшой объем пройденного материала ощущается как победа, это мотивирует вас продолжать работу.</p>
                </div>
                <div class="welcome__img">
                    <img class="welcome__block--img" src="uploads/welcome/3.png" alt="">
                </div>
            </div>

            <!-- Swipe -->

            <div class="welcome__start">
                <h3 class="welcome__header">Готовы улучшить свою успеваемость?</h3>
                <button class="welcome__bg--btn"><a class="welcome__bg--sign-up" href="#">Начать</a></button>
            </div>
        </div>
    </div>

@endsection
