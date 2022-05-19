@extends('layouts.layout')

@include('layouts.navigation')

@section('content')

<!-- Create Set -->

<div class="create-set">
    <div class="container container--center">
        <form action="/store_set" method="POST">
            @csrf
        <div class="create-set__header">
            <h2 class="create-set__header-text">Создать новый учебный модуль</h2>
            <input class="create-set__btn" type="submit" value="Создать">
        </div>

        <div class="create-set__title">
            <input class="create-set__title-text" name="set_name" type="text" placeholder="Введите название, например, Биология. Фотосинтез и хемосинтез">
            <input class="create-set__title-description" type="text" placeholder="Добавить описание...">
            <input type="date" name="date">Дата
        </div>

    </div>
</div>

<div class="word">
    <div class="container container--center">

            <input type="text" name="word_count" placeholder="Сколько слов">
        <div class="word__block">
            <div class="word__title">
                <div class="word__num">1</div>
                <div class="word__delete"><a href="#">Удалить</a></div>
            </div>

            <div class="word__area">
                <div>
                    <input type="text" class="word__termin word__termin--termin" name="english_word1">
                    <div class="word__description">Термин</div>
                </div>
                <div>
                    <input type="text" class="word__termin" name="russian_word1">
                    <div class="word__description">Определение</div>
                </div>
            </div>
        </div>
        <div class="word__block">
            <div class="word__title">
                <div class="word__num">2</div>
                <div class="word__delete"><a href="#">Удалить</a></div>
            </div>

            <div class="word__area">
                <div>
                    <input type="text" name="english_word2" class="word__termin word__termin--termin">
                    <div class="word__description">Термин</div>
                </div>
                <div>
                    <input type="text" name="russian_word2" class="word__termin">
                    <div class="word__description">Определение</div>
                </div>
            </div>
        </div>
        <div class="word__block">
            <div class="word__title">
                <div class="word__num">3</div>
                <div class="word__delete"><a href="#">Удалить</a></div>
            </div>

            <div class="word__area">
                <div>
                    <input type="text" name="english_word3" class="word__termin word__termin--termin">
                    <div class="word__description">Термин</div>
                </div>
                <div>
                    <input type="text" name="russian_word3" class="word__termin">
                    <div class="word__description">Определение</div>
                </div>
            </div>
        </div>
        <div class="word__block">
            <div class="word__title">
                <div class="word__num">4</div>
                <div class="word__delete"><a href="#">Удалить</a></div>
            </div>

            <div class="word__area">
                <div>
                    <input type="text" name="english_word4" class="word__termin word__termin--termin">
                    <div class="word__description">Термин</div>
                </div>
                <div>
                    <input type="text" name="russian_word4" class="word__termin">
                    <div class="word__description">Определение</div>
                </div>
            </div>
        </div>
        <div class="word__block">
            <div class="word__title">
                <div class="word__num">5</div>
                <div class="word__delete"><a href="#">Удалить</a></div>
            </div>

            <div class="word__area">
                <div>
                    <input type="text" name="english_word5" class="word__termin word__termin--termin">
                    <div class="word__description">Термин</div>
                </div>
                <div>
                    <input type="text" name="russian_word5" class="word__termin">
                    <div class="word__description">Определение</div>
                </div>
            </div>
        </div>
            <div id="additional_cards"></div>
        <div class="word__add">
            <button class="word__add-text" onclick="add_card()" type="button">+ Добавить карточку</button>
        </div>
        </form>
    </div>
</div>


<script>
    word_count = 6;
    function add_card() {
        document.getElementById('additional_cards').innerHTML += `<div class="word__block">\n` +
            `<div class="word__title">\n` +
            `<div class="word__num">${word_count}</div>\n` +
            `<div class="word__delete"><a href="#">Удалить</a></div>\n` +
            `</div>\n` +
            `<div class="word__area">\n` +
            `<div>\n` +
            `<input type="text" name="english_word${word_count}" class="word__termin word__termin--termin">\n` +
            `<div class="word__description">Термин</div>\n` +
            `</div>\n` +
            `<div>\n` +
            `<input type="text" name="russian_word${word_count}" class="word__termin">\n` +
            `<div class="word__description">Определение</div>\n` +
            `</div>\n` +
            `</div>\n` +
            `</div>`;

        word_count = word_count + 1;
    }

</script>

@endsection
