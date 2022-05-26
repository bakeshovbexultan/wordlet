@extends('layouts.layout')

@section('content')

<div class="word-list">
    <div class="container container--center">
        <div class="word-list__header">
            <h2 class="word-list__header-text">19 May | {{ $set->date }}</h2>
        </div>

        <div class="word-list__learning">

        </div>

        <div class="word-list__author">
            <div class="word-list__author--left">
                <div class="word-list__author-avatar">ava</div>
                <div class="word-list__author-name">beksultan</div>
            </div>
            <div class="word-list__author--right">
                <div class="word-list__author--btn">
                    <a href="/delete/{{$set->id}}" class="word-list__author--btn-delete">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </div>
                <div class="word-list__author--btn">
                    <a href="#">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                </div>
                <div class="word-list__author--btn word-list__author--btn-ellipsis">
                    <i class="fa-solid fa-ellipsis"></i>
                </div>
            </div>
        </div>

        <div class="word-list__words-header">
            <div class="word-list__words-header-text">
                Термины в модуле ({{ $word_count }})
            </div>
            <div class="word-list__words-sorting">
                Ваша статистика
            </div>
        </div>

        <div class="word-list__words">
            @foreach($set->words as $word)
                <div class="word-list__word">
                    <div class="word-list__word-term">{{$word['english_word']}}</div>
                    <div class="word-list__word-description">{{$word['russian_word']}}</div>
                    <div class="word-list__word-change-btn">+</div>
                </div>
            @endforeach
        </div>

        <a href="#" class="word-list__words--btn">Добавить или удалить термины</a>
    </div>
</div>

@endsection
