<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body class="container-lg">
    <header class="header">
        <a class="header-brand" href="{{route('home')}}">
            ポートフォリオ
        </a>
    </header>
    <div>
        @yield('content')
    </div>
    <script src="{{ asset('js/sidebar.js') }}"></script>
</body>

</html>