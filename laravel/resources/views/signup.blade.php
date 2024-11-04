@extends ('layouts.second')

@section('pagename', 'Регистрация')


@section('content')

<h2>ДОБРО ПОЖАЛОВАТЬ НА НАШ САЙТ</h2>
        <h3>РЕГИСТРАЦИЯ</h3>

<form action="{{route('signup')}}" method="post" class="d-flex flex-column align-items-center form-up">
    @csrf
    <input name="name" type="text" placeholder="ФИО" required>
    <input name="email" type="email" placeholder="Почта" required>
    <input name="password" type="password" placeholder="Пароль" required>

    <button type="submit">Регистрация</button>
</form>


<div class="auth-line d-flex">
    <p>Уже есть аккаунт?</p>
    <a href="{{route('show_signin')}}">Войти</a>
</div>

@endsection