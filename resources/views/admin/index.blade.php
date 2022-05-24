@extends('principal')

@section('conteudo-principal')
    <div class="container">
        <h3>Guitar Wars - High Scores Administration</h3>
        <p>Below is a list of all Guitar Wars high score. Use this page to remove scores as needed.</p>
        <hr>
        <div class="row">
            @foreach ($scores as $score)
                <p>
                    <strong>{{ $score->name }}</strong> {{ $score->date }} - {{ $score->score }} -
                    <a href="{{ route('delete-confirmation', $score->id) }}" class="btn btn-danger" >Remover</a>
                    @if ($score->approved == 0)
                        <a href="{{ route('approved-confirmation', $score->id) }}" class="btn btn-success" >Approved</a>
                    @endif
                </p>

            @endforeach
        </div>


    </div>

@endsection
