@extends('layouts.layout')

@section('content')

<form action="/store_set" method="POST">
    @csrf
<div class="create-set">
    <div class="container container--center">
        <div class="create-set__header">
            <h2 class="create-set__header-text">Создать новый учебный модуль</h2>
            <input class="create-set__btn" type="submit" value="Создать">
        </div>

        <div class="create-set__title">
            <label>
                <input class="create-set__title-text" name="set_name" type="text" placeholder="Введите название, например, Биология. Фотосинтез и хемосинтез">
            </label>
            <label>
                <input class="create-set__title-description" type="text" placeholder="Добавить описание...">
            </label>
            <label>
                <input type="date" name="date">
            </label>Дата
        </div>

    </div>
</div>

<div class="word">
    <div class="container container--center">

        <label>
            <input type="text" name="word_count" placeholder="Сколько слов">
        </label>
        <div class="word__block">
            <div class="word__title">
                <div class="word__num">1</div>
                <div class="word__delete"><a href="#">Удалить</a></div>
            </div>

            <div class="word__area">
                <div>
                    <label>
                        <input type="text" class="word__term word__term--term" name="english_word1">
                    </label>
                    <div class="word__description">Термин</div>
                </div>
                <div>
                    <label>
                        <input type="text" class="word__term" name="russian_word1">
                    </label>
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
                    <label>
                        <input type="text" name="english_word2" class="word__term word__term--term">
                    </label>
                    <div class="word__description">Термин</div>
                </div>
                <div>
                    <label>
                        <input type="text" name="russian_word2" class="word__term">
                    </label>
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
                    <label>
                        <input type="text" name="english_word3" class="word__term word__term--term">
                    </label>
                    <div class="word__description">Термин</div>
                </div>
                <div>
                    <label>
                        <input type="text" name="russian_word3" class="word__term">
                    </label>
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
                    <label>
                        <input type="text" name="english_word4" class="word__term word__term--term">
                    </label>
                    <div class="word__description">Термин</div>
                </div>
                <div>
                    <label>
                        <input type="text" name="russian_word4" class="word__term">
                    </label>
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
                    <label>
                        <input type="text" name="english_word5" class="word__term word__term--term">
                    </label>
                    <div class="word__description">Термин</div>
                </div>
                <div>
                    <label>
                        <input type="text" name="russian_word5" class="word__term">
                    </label>
                    <div class="word__description">Определение</div>
                </div>
            </div>
        </div>
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
