@include('layouts.head')
@include('layouts.navigation')



<h1 class="library__header">Модули</h1>

@foreach ($sets as $set)
    <div>
        <a style="text-decoration: none; color: black" href="word_list/{{$set->id}}">{{ $set->set_name }}</a>
    </div>
    <br>
@endforeach




@include('layouts.footer')
