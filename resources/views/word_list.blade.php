@include('layouts.head')
@include('layouts.navigation')

<h2>{{ $day->date }}</h2>
@php
    $i = 1;
@endphp
@foreach($day->words as $word)
    <div>
        {{ $i }}. {{$word['english_word']}} - {{$word['russian_word']}}
    </div>
    @php
        $i++;
    @endphp
@endforeach
<br>
<a href="/delete/{{$day->id}}">
    Удалить
</a>
@include('layouts.footer')
