<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Semi+Condensed:ital,wght@0,1..1000;1,1..1000&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>РБ | @yield('pagename')</title>
</head>

<body class="sofia d-flex flex-column align-items-center" style="min-height: 100vh">

    <header>
        <nav class="d-flex justify-content-between bg-small">
            <a href="{{route('logout')}}"><img src="images/icons/arrow.png" alt=""></a>
            <a href=""><img src="images/icons/profile.png" alt=""></a>
            @auth

        <a href="{{route('index')}}">Заявки</a>
        <a href="{{route('createnews')}}">Создать пост</a>
        

        @endauth
        </nav>
    </header>

    <main style="flex: 1">
        <section class="d-flex flex-column align-items-center gaps-between">
            @yield('content')
        </section>
    </main>

    <footer>    </footer>

</body>

</html>