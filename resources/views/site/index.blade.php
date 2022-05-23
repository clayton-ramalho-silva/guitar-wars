@extends('principal')

@section('conteudo-principal')
<div class="container clearfix mt-3">
    <div class="float-start">
        <h1><a href="{{ route('index-score') }}">Guitar Wars - High Sores</a></h1>
        <p>Welcome, Guitar Warrio, do you have what it takes to check the high score list? If no, just <a href="{{ route('add-score') }}">add your score</a></p>
    </div>
    <div class="float-end">
        @guest()
            <a href="{{ route('login') }}" class="btn btn-success">Login</a>
        @endguest

        @auth()
            <form action="{{ route('logout') }}" method="post">
                @csrf

                <button type="submit" class="btn btn-primary">Sair</button>
            </form>
        @endauth

    </div>
</div>
<hr>

<div class="container mt-3">

    <div class="row mt-4 p-5 bg-primary text-white rounded">
        <p>Top Score: {{ $topScore }}</p>
    </div>
    @foreach ($scores as $score)

        <div class="row mt-3">
            <div class="col">
                <p class="h1">{{ $score->score }}</p>
                <p class="h6"><strong>Name:</strong> {{ $score->name }}</p>
                <p class="h6"><strong>Date:</strong> {{ $score->date }}</p>
            </div>
            <div class="col">
                <img src="/img/screenshots/{{ $score->screenshot }}" alt="" class="rounded">
            </div>
        </div>


    @endforeach
</div>
@endsection
