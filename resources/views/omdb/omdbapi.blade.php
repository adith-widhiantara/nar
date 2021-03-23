@extends('base.base')

@section('base')
<div class="container">
    <div class="row">
        @foreach ($response['Search'] as $key => $item)
        <div class="col-4 my-3">
            <div class="card">
                <img src="{{ asset('img/default.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ ($key+1).' : '. $item['Title'] }}</h5>
                    <p class="card-text">{{ $item['Year'] }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-8 offset-2">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">Previous</a>
                    </li>

                    @for ($i = 1; $i < 5; $i++) <li class="page-item @if ($page == $i) active @endif">
                        <a class="page-link" href="{{ route('omdb.search', ['search' => $search, 'page' => $i]) }}">{{ $i }}</a>
                        </li>
                        @endfor

                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection
