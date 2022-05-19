@extends('principal')

@section('conteudo-principal')

<div class="container mt-3">
    <h1>Guitar Wars - Add Your High Score</h1>

    <div class="row mt-3">
        <form action="{{ route('add-score') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name')}}">
            </div>


            <div class="mb-3">
                <label for="score" class="form-label">Score:</label>
                <input type="text" name="score" id="score" class="form-control" value="{{ old('score') }}">
            </div>

            <div class="form-group">
                <label for="image">Screenshot:</label>
                <input type="file" id="screenshot" name="screenshot" class="form-control-file">
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>

    </div>
</div>

@endsection
