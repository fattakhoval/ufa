@extends ('layouts.app')

@section('content')

<h2>Предложите мероприятие</h2>

<form action="{{route('applications.store')}}" method="post" class="d-flex flex-column align-items-center">
   @csrf

    <input type="hidden" name="id" value="1">
    <input name="name_user" type="text" placeholder="ФИО" required>
    <input name="title" type="text" placeholder="Название" required>
    <input name="description" type="text" placeholder="Описание" required>
    <input name="days" type="text" placeholder="Дата проведения" required>
    <input type="hidden" name="status" value="Новая">
    <button type="submit">Подать заявку</button>
</form>

@endsection