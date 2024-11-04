@extends ('layouts.app')

@section('content')

<h2>Предложите новость</h2>

<form action="{{route('holidays.store')}}" method="post" class="d-flex flex-column align-items-center form-up" style="margin: 0 0 2em 0;">
   @csrf
    <input type="hidden" name="user_id" value="1">
    <input name="title" type="text" placeholder="Название" required>
    <input name="description" type="text" placeholder="Описание" required>
    <input name="city" type="text" placeholder="Описание" required>
    <input type="submit" value="Создать новость">
</form>

@endsection