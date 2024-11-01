@extends ('layouts.second')

@section('content')

<h2>АДМИН</h2>

<h3>Заявки</h3>

<div class="application">
    <div class="cont d-flex justify-content-between">
        <div class="info d-flex flex-column align-items-start">
            <h4>№1</h4>
            <p>Загагулька И.А.</p>
            <p>Праздник ковра</p>
            <p>Бла бла бла бла</p>
        </div>
        <div class="actions d-flex flex-column align-items-center">
            <a href="{{route('applications.reject')}}"><img src="images/icons/cross.png" alt=""></a>
            <a href="{{route('applications.accept')}}"><img src="images/icons/checkmark.png" alt=""></a>
        </div>
    </div>

</div>

@endsection