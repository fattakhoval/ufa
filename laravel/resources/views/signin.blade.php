@extends ('layouts.second')

@section('pagename', 'Авторизация')


@section('content')

<h2>С ВОЗВРАЩЕНИЕМ НА НАШ САЙТ</h2>
        <h3>АВТОРИЗАЦИЯ</h3>

<form action="{{route('signin')}}" method="post" class="d-flex flex-column align-items-center form-up">
    @csrf
    <input name="email" type="email" placeholder="Почта">
    <input name="password" type="password" placeholder="Пароль">

    <input type="submit" value="Войти">
</form>

<a href="{{route('show_signup')}}">зарегистрироваться</a>


@endsection