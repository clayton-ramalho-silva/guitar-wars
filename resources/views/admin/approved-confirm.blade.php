@extends('principal')

@section('conteudo-principal')
    <div class="container">
        <h1>Guitar Wars - Approve a High Score</h1>
        <p>The high score of {{ $score->score }} for {{ $score->name }} was successfully approved.</p>

        <a href="{{ route('admin')}}">Back to admin page</a>

    </div>
@endsection
