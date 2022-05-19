@extends('layouts.layout')

@include('layouts.navigation')

@section('content')


<div class="set">
    <div class="container">
        
@foreach ($sets as $set)
    <h2 class="set__title">Учебные модули</h2>
    <a href="word_list/{{$set->id}}" class="set__block">
        <div class="set__word-count">10 терминов</div>
        <div class="set__name">{{ $set->set_name }}</div>
    </a>
@endforeach

    </div>
</div>


@endsection
