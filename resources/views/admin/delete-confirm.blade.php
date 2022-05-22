@extends('principal')

@section('conteudo-principal')
    <div class="container">
        <h1>Guitar Wars - Remove a High Score</h1>
        <p>The high score of {{ $score->score }} for {{ $score->name }} was successfully remove.</p>

        <a href="{{ route('admin')}}">Back to admin page</a>

    </div>
@endsection
