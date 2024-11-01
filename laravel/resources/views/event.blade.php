@extends ('layouts.app')

@section('content')

<h2>Предложите мероприятие</h2>

<form action="" method="post" class="d-flex flex-column align-items-center">
    <input type="hidden" name="id">
    <input name="fio" type="text" placeholder="ФИО">
    <input name="name" type="text" placeholder="Название">
    <input name="descr" type="text" placeholder="Описание">
    <input name="date" type="text" placeholder="Дата проведения">

    <input type="submit" value="Подать заявку">
</form>

@endsection