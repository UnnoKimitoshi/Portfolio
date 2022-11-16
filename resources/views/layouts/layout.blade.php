<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <header class="header">
        <div class="header-brand">ポートフォリオ</div>
        <div class="header-items">
            <div class="header-item">ポートフォリオ一覧</div>
            <div class="header-item">職歴</div>
        </div>
    </header>
    <div class="container-lg">
        @yield('content')
    </div>
</body>

</html>