@include('layouts.head')
@include('layouts.navigation')
<h1>Создать новый учебный модуль</h1>
<form action="/store_set" method="POST">
    @csrf
    <input type="date" name="date">Дата
    <input type="text" name="set_name">Название
    <input type="text" name="word_count" placeholder="Сколько слов">
    <div>
        1
        <input type="text" name="english_word1">
        <input type="text" name="russian_word1">
    </div>
    <div>
        2
        <input type="text" name="english_word2">
        <input type="text" name="russian_word2">
    </div>
    <div>
        3
        <input type="text" name="english_word3">
        <input type="text" name="russian_word3">
    </div>
    <div>
        4
        <input type="text" name="english_word4">
        <input type="text" name="russian_word4">
    </div>
    <div>
        5
        <input type="text" name="english_word5">
        <input type="text" name="russian_word5">
    </div>
    <div id="additional_cards">
    </div>
    <div>
        <button onclick="add_card()" type="button">+ Добавить карточку</button>
    </div>

    <input type="submit" value="Создать">
</form>

<script>
    word_count = 6;
    function add_card() {
        document.getElementById('additional_cards').innerHTML += word_count + ` <input type="text" name="english_word${word_count}">\n` +
            `<input type="text" name="russian_word${word_count}">` + `<br>`;
        word_count = word_count + 1;
    }

</script>

@include('layouts.footer')
