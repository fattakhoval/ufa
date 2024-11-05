@extends ('layouts.second')
@section('content')

@section('admin')

<nav class="d-flex justify-content-evenly nav-second">

@auth

<a href="{{route('index')}}">Заявки</a>
<a href="{{route('createnews')}}">Создать пост</a>


@endauth


</nav>
@endsection

<h2>АДМИН</h2>


<h3>Заявки</h3>
@foreach ($applications as $app )

<div class="application">

<div class="cont d-flex justify-content-between">
    <div class="info d-flex flex-column align-items-start">
        <h4>№{{ $app->id }}</h4>
        <p style="opacity: 0.75;">{{ $app->name }}</p>
        <p>{{ $app->title }}</p>
        <p>{{ $app->description }}</p>
        <p>{{ $app->days }}</p>
        <p>{{ $app->name_user }}</p>
    </div>

    @if($app->status == 'Новая')
    <div class="actions d-flex flex-column justify-content-between align-items-center">
        <a href="{{route('reject', ['id'=>$app->id])}}"><img src="images/icons/cross.png" alt=""></a>
        <a href="{{route('accept', ['id'=>$app->id])}}"><img src="images/icons/check.png" alt=""></a>
    </div>
    @else
    <p>{{$app->status}}</p>

    @endif
</div>

</div>
@endforeach



@endsection