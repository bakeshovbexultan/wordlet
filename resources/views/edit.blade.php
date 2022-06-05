@extends('layouts.layout')
@section('content')

<form action="/update/{{ $set->id }}" method="POST">
@csrf
<div class="create-set">
    <div class="container container--center">
        <div class="create-set__header">
            <h4>Назад к модулю</h4>
            <input class="create-set__btn" type="submit" value="Готово">
        </div>

        <div class="create-set__title">
            <label>
                <input class="create-set__title-text" value="{{ $set->set_name }}" name="set_name" type="text" placeholder="Введите название, например, Биология. Фотосинтез и хемосинтез">
            </label>
            <label>
                <input class="create-set__title-description" type="text" placeholder="Добавить описание...">
            </label>
            <label>
                <input type="date" name="date" value="{{ $set->date }}">
            </label>Дата
        </div>

    </div>
</div>

<div class="word">
    <div class="container container--center">

        <label>
            <input type="text" name="word_count" placeholder="Сколько слов" value="{{ $word_count }}">
        </label>

        <?php $count = 1; ?>
        @foreach($set->words as $word)

        <div class="word__block">
            <div class="word__title">
                <div class="word__num">{{ $count }}</div>
                <div class="word__delete"><a href="#">Удалить</a></div>
            </div>

            <div class="word__area">
                <div>
                    <label>
                        <input type="text" class="word__term word__term--term" name="english_word{{ $count }}" value="{{ $word->english_word }}">
                    </label>
                    <div class="word__description">Термин</div>
                </div>
                <div>
                    <label>
                        <input type="text" class="word__term" name="russian_word{{ $count }}" value="{{ $word->russian_word }}">
                    </label>
                    <div class="word__description">Определение</div>
                </div>
            </div>
        </div>
        <?php $count++; ?>

        @endforeach

        <div id="additional_cards"></div>
        <div class="word__add">
            <button class="word__add-text" onclick="add_card()" type="button">+ Добавить карточку</button>
        </div>
    </div>
</div>
</form>

<script>
    let word_count = 6;
    function add_card() {
        document.getElementById('additional_cards').innerHTML += `<div class="word__block">\n` +
            `<div class="word__title">\n` +
            `<div class="word__num">${word_count}</div>\n` +
            `<div class="word__delete"><a href="#">Удалить</a></div>\n` +
            `</div>\n` +
            `<div class="word__area">\n` +
            `<div>\n` +
            `<input type="text" name="english_word${word_count}" class="word__term word__term--term">\n` +
            `<div class="word__description">Термин</div>\n` +
            `</div>\n` +
            `<div>\n` +
            `<input type="text" name="russian_word${word_count}" class="word__term">\n` +
            `<div class="word__description">Определение</div>\n` +
            `</div>\n` +
            `</div>\n` +
            `</div>`;

        word_count++;
    }
</script>

@endsection
