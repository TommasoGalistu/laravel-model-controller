
@extends('layout.main')

@section('content')
<div class="container d-flex flex-wrap gap-4">

    @foreach ($movies as $movie)

    <div class="card" style="width: 18rem;">

        <div class="card-body">
          <h3 class="card-title">{{ $movie->title }}</h3>
          <h6 class="card-title">{{ $movie->original_title }}</h6>
          <p>{{ $movie->nationality }}</p>
          <p>{{ $movie->vote }}</p>
          <p>{{ $movie->date }}</p>

          <a href="#" class="btn btn-primary">Descrizione film</a>
        </div>
      </div>

    @endforeach
</div>


@endsection
