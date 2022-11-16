<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインフォーム</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body class="form-signin">
    <form class="form-singin" method="POST" action="{{ route('login') }}">
        @csrf
        <h1 class="h3 mb-3 fw-normal">ログインフォーム</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if (session('login_error'))
        <div class="alert alert-danger">
            {{ session('login_error')}}
        </div>
        @endif

        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name="name" placeholder="name">
            <label for="floatingInput">名前</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="password">
            <label for="floatingPassword">パスワード</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">ログイン</button>
    </form>
</body>

</html>