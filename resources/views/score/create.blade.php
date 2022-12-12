@extends("layouts.layout")
@section("content")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                登録画面
            </div>
            <div class="card-body">
                <form method="POST" action="/scores">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="control-label">名前</label>
                        <input class="form-control" name="name" type="text">
                    </div>
                    <div class="form-group">
                        <label for="score" class="control-label">スコア</label>
                        <input class="form-control" name="score" type="number">
                    </div>
                    <button class="btn btn-primary" type="submit">登録</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection