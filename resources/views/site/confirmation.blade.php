@extends('principal')

@section('conteudo-principal')

<div class="container mt-3">
    <h1>Guitar Wars - Add Your High Score</h1>
    <p class="6">Thanks for adding your new high score!</p>
    <div class="row mt-3">
        <p><strong>Name:</strong>{{ $score->name }}</p>
        <p><strong>Score:</strong>{{ $score->score }}</p>
    </div>

    <div class="row mt-3">
        <a href="{{ route('index-score') }}">Back to high scores</a>
    </div>
</div>

@endsection
