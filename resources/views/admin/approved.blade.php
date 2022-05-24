@extends('principal')

@section('conteudo-principal')
    <div class="container">
        <h1>Guitar Wars - Approve a High Score</h1>
        <p>Are you sure want to approve the following high score?</p>
        <div class="row">
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Date:</strong> {{ $user->date }}</p>
            <p><strong>Score:</strong> {{ $user->score }}</p>

            <form action="{{ route('approved', $user->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="d-inline-flex w-100 mt-3 mb-3">
                    <div class="form-check me-3">
                        <input type="radio" name="optradio" id="radio1" class="form-check-input" value="1" checked>Yes
                    </div>
                    <div class="form-check">
                        <input type="radio" name="optradio" id="radio2" class="form-check-input" value="0" >No
                    </div>
                </div>


                <button type="submit" class="btn btn-primary mt-3 mb-3">Submit</button>


            </form>

            <a href="{{ route('admin')}}">Back to admin page</a>


        </div>
    </div>
@endsection
