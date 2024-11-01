@extends ('layouts.second');

@section('content')

<h2>ДОБРО ПОЖАЛОВАТЬ НА НАШ САЙТ</h2>
        <h3>РЕГИСТРАЦИЯ</h3>

<form action="" method="post">
    @csrf
    <input name="fio" type="text" placeholder="ФИО">
    <input name="email" type="email" placeholder="Почта">
    <input name="password" type="password" placeholder="Пароль">

    <input type="submit" value="Зарегистрироваться">
</form>


<div class="auth-line">
    <p>Уже есть аккаунт?</p>
    <a href="">Войти</a>
</div>

@endsection