@extends('layouts.layout')

@include('layouts.navigation')

@section('content')


    <h2>{{ $set->date }}</h2>
@php
    $i = 1;
@endphp
@foreach($set->words as $word)
    <div>
        {{ $i }}. {{$word['english_word']}} - {{$word['russian_word']}}
    </div>
    @php
        $i++;
    @endphp
@endforeach
<br>
<a href="/delete/{{$set->id}}">
    Удалить
</a>




@endsection
