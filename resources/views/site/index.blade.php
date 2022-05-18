@extends('principal')

@section('conteudo-principal')
<div class="container">
    <h1><a href="{{ route('index-score') }}">Guitar Wars - High Sores</a></h1>
    <p>Welcome, Guitar Warrio, do you have what it takes to check the high score list? If no, just <a href="{{ route('add-score') }}">add your score</a></p>
    <hr>
</div>

<div class="container mt-3">
    @foreach ($scores as $score)
        <div class="row mt-3">
            <p class="h1">{{ $score->score }}</p>
            <p class="h6"><strong>Name:</strong> {{ $score->name }}</p>
            <p class="h6"><strong>Date:</strong> {{ $score->date }}</p>
        </div>
    @endforeach
</div>
@endsection
