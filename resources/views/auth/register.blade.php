<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wordlet</title>

    {{--  META  --}}
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--  SITE ICON  --}}
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon">
    <link type="Image/x-icon" href="/favicon.ico" rel="icon">

    {{--  FONTAWESOME  --}}
    <script src="{{ URL::asset('https://kit.fontawesome.com/2234da2371.js') }}" crossorigin="anonymous"></script>
    {{--  CSS  --}}
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    {{--  JS  --}}
    <script src="{{ URL::asset('js/script.js') }}"></script>
</head>
<body>

<div class="register">
    <div class="register__left">
        <h2 class="register__header">Учитесь по проверенным источникам. Зарегистрируйтесь уже сегодня.</h2>
    </div>
    <div class="register__right">
        <div class="register__sign--link">
            <span class="register__link active">Зарегистрироваться</span>
            <a class="register__link" href="#">Вход</a>
        </div>
        <div class="register__form">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="register__form--select">
                    <label class="register__form--label" for="">ДАТА РОЖДЕНИЯ</label>
                    <select class="register__form--birth" name="birthday-day" id="">
                        <option class="register__form--color" value="" selected>Число</option>
                        <option class="register__form--color" value="">1</option>
                        <option class="register__form--color" value="">2</option>
                        <option class="register__form--color" value="">3</option>
                        <option class="register__form--color" value="">4</option>
                        <option class="register__form--color" value="">5</option>
                        <option class="register__form--color" value="">6</option>
                        <option class="register__form--color" value="">7</option>
                        <option class="register__form--color" value="">8</option>
                        <option class="register__form--color" value="">9</option>
                        <option class="register__form--color" value="">10</option>
                        <option class="register__form--color" value="">11</option>
                        <option class="register__form--color" value="">12</option>
                        <option class="register__form--color" value="">13</option>
                        <option class="register__form--color" value="">14</option>
                        <option class="register__form--color" value="">15</option>
                        <option class="register__form--color" value="">16</option>
                        <option class="register__form--color" value="">17</option>
                        <option class="register__form--color" value="">18</option>
                        <option class="register__form--color" value="">19</option>
                        <option class="register__form--color" value="">20</option>
                        <option class="register__form--color" value="">21</option>
                        <option class="register__form--color" value="">22</option>
                        <option class="register__form--color" value="">23</option>
                        <option class="register__form--color" value="">24</option>
                        <option class="register__form--color" value="">25</option>
                        <option class="register__form--color" value="">26</option>
                        <option class="register__form--color" value="">27</option>
                        <option class="register__form--color" value="">28</option>
                        <option class="register__form--color" value="">29</option>
                        <option class="register__form--color" value="">30</option>
                        <option class="register__form--color" value="">31</option>
                    </select>
                    <select class="register__form--birth" name="birthday-month" id="">
                        <option class="register__form--color" value="" selected>Месяц</option>
                        <option class="register__form--color" value="1">Январь</option>
                        <option class="register__form--color" value="1">Февраль</option>
                        <option class="register__form--color" value="5">Март</option>
                        <option class="register__form--color" value="7">Апрель</option>
                        <option class="register__form--color" value="9">Май</option>
                        <option class="register__form--color" value="11">Июнь</option>
                        <option class="register__form--color" value="13">Июль</option>
                        <option class="register__form--color" value="15">Август</option>
                        <option class="register__form--color" value="17">Сентябрь</option>
                        <option class="register__form--color" value="19">Октябрь</option>
                        <option class="register__form--color" value="21">Ноябрь</option>
                        <option class="register__form--color" value="23">Декабрь</option>
                    </select>
                    <select class="register__form--birth" name="birthday-year" id="">
                        <option class="register__form--color" value="" selected>Год</option>
                        <option class="register__form--color" value="">2022</option>
                        <option class="register__form--color" value="">2021</option>
                        <option class="register__form--color" value="">2020</option>
                        <option class="register__form--color" value="">2019</option>
                        <option class="register__form--color" value="">2018</option>
                        <option class="register__form--color" value="">2017</option>
                        <option class="register__form--color" value="">2016</option>
                        <option class="register__form--color" value="">2015</option>
                        <option class="register__form--color" value="">2014</option>
                        <option class="register__form--color" value="">2013</option>
                        <option class="register__form--color" value="">2012</option>
                        <option class="register__form--color" value="">2011</option>
                        <option class="register__form--color" value="">2010</option>
                        <option class="register__form--color" value="">2009</option>
                        <option class="register__form--color" value="">2008</option>
                        <option class="register__form--color" value="">2007</option>
                        <option class="register__form--color" value="">2006</option>
                        <option class="register__form--color" value="">2005</option>
                        <option class="register__form--color" value="">2004</option>
                        <option class="register__form--color" value="">2003</option>
                        <option class="register__form--color" value="">2002</option>
                        <option class="register__form--color" value="">2001</option>
                        <option class="register__form--color" value="">2000</option>
                        <option class="register__form--color" value="">1900</option>
                    </select>
                </div>
                <div>
                    <label class="register__form--label" for="email">ЭЛ. ПОЧТА</label>
                    <input class="register__input" id="email" type="email" placeholder="user@wordlet.com" name="email" value="{{ old('email') }}" required>
                </div>
                <div>
                    <label class="register__form--label" for="login">ИМЯ ПОЛЬЗОВАТЕЛЯ</label>
                    <input class="register__input" id="login" name="name" type="text" placeholder="andrew123" value="{{ old('name') }}" required>
                </div>
                <div>
                    <label class="register__form--label" for="password">ПАРОЛЬ</label>
                    <input class="register__input" id="password" type="password" name="password" placeholder="•••••••••" required>
                </div>
                <div>
                    <input class="register__submit" type="submit" value="Зарегистрироваться">
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
