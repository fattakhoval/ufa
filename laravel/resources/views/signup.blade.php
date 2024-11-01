@extends ('layouts.second')

@section('pagename', 'Регистрация')


@section('content')

<h2>ДОБРО ПОЖАЛОВАТЬ НА НАШ САЙТ</h2>
        <h3>РЕГИСТРАЦИЯ</h3>

<form action="" method="post" class="d-flex flex-column align-items-center form-up">
    @csrf
    <input name="fio" type="text" placeholder="ФИО">
    <input name="email" type="email" placeholder="Почта">
    <input name="password" type="password" placeholder="Пароль">

    <input type="submit" value="Зарегистрироваться">
</form>


<div class="auth-line d-flex">
    <p>Уже есть аккаунт?</p>
    <a href="">Войти</a>
</div>

@endsection