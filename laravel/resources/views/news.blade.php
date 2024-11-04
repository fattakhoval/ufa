@extends ('layouts.app')

@section('pagename', 'Главная')

@section('content')

<div class="news d-flex flex-column align-items-center gaps-between">

@foreach ($holidays as $holiday)

<div class="block-new d-flex flex-column align-items-center">
    <h2 class="news-header">{{$holiday->title}}</h2>
    <p>{{$holiday->description}}</p>
</div>

@endforeach


</div>

@endsection