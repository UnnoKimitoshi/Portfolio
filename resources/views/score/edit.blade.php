@extends("layouts.layout")
@section("content")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                編集画面
            </div>
            <div class="card-body">
                <form method="POST" action="/scores/{{ $score->id }}" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="id" class="control-label">ID</label>
                        <div>{{ $score->id }}</div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="name" class="control-label">名前</label>
                        <input class="form-control" name="name" type="text" value="{{ $score->name }}">
                    </div>
                    <div class="form-group">
                        <label for="score" class="control-label">名前</label>
                        <input class="form-control" name="score" type="number" value="{{ $score->score }}">
                    </div>
                    <hr>
                    <button class="btn btn-primary" type="submit">更新</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection