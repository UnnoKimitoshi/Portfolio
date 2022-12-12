@extends("layouts.layout")
@section("content")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                一覧画面
            </div>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <a href="{{ url('scores/create') }}" class="btn btn-success mb-3">登録</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>名前</th>
                            <th>スコア</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        /* @foreach($scores as $score)
                        <tr>
                            <td>{{ $score->name }}</td>
                            <td>{{ $score->score }}</td>
                            <td><a href="{{ url('scores/' . $score->id) }}" class="btn btn-info">詳細</a></td>
                            <td><a href="{{ url('scores/' . $score->id . '/edit') }}" class="btn btn-primary">編集</a></td>
                            <td>
                                <form method="POST" action="/scores/{{ $score->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">削除</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach*/
                        ?>

                        @foreach($scores as $score)
                        <tr>
                            <td>{{ $score->name }}</td>
                            <td>{{ $score->score }}</td>
                            <td><a href="{{ url('scores/' . $score->id) }}" class="btn btn-info">詳細</a></td>
                            <td><a href="{{ url('scores/' . $score->id . '/edit') }}" class="btn btn-primary">編集</a></td>
                            <td>
                                <form method="POST" action="/scores/{{ $score->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">削除</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        {{$scores->links()}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection