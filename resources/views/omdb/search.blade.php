@extends('base.base')

@section('base')
<div class="container">
    <div class="row my-3">
        <div class="col-8 offset-2">
            <form action="{{ route('omdb.store') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="FilmInput" placeholder="Transformer" name="film" required autofocus>
                    <label for="FilmInput">Input Film Name</label>
                </div>

                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>
</div>
@endsection
