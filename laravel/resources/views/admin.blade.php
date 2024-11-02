@extends ('layouts.second')

@section('content')

<h2>АДМИН</h2>

<h3>Заявки</h3>

<div class="application">
    <div class="cont d-flex justify-content-between">
        <div class="info d-flex flex-column align-items-start">
            <h4>№1</h4>
            <p style="opacity: 0.75;">Загагулька И.А.</p>
            <p>Праздник ковра</p>
            <p>Бла бла бла бла</p>
        </div>
        <div class="actions d-flex flex-column justify-content-between align-items-center">
            <a href="{{route('applications.reject', 1)}}"><img src="images/icons/cross.png" alt=""></a>
            <a href="{{route('applications.accept', 1)}}"><img src="images/icons/check.png" alt=""></a>
        </div>
    </div>

</div>

@endsection