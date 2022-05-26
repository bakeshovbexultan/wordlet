@extends('layouts.layout')
@section('content')

<div class="set">
    <div class="container">
    <h2 class="set__title">Учебные модули</h2>

@foreach ($sets as $set)
    <a href="word_list/{{$set->id}}" class="set__block">
        <div class="set__word-count">{{ count($set->words) }} терминов</div>
        <div class="set__name">{{ $set->set_name }}</div>
    </a>
@endforeach

    </div>
</div>

@endsection
