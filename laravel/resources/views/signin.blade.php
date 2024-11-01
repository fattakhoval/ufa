@extends ('layouts.second');

@section('content')

<h2>С ВОЗВРАЩЕНИЕМ НА НАШ САЙТ</h2>
        <h3>АВТОРИЗАЦИЯ</h3>

<form action="" method="post">
    @csrf
    <input name="email" type="email" placeholder="Почта">
    <input name="password" type="password" placeholder="Пароль">

    <input type="submit" value="Войти">
</form>

@endsection