
@extends('layout.main')

@section('content')
<div class="container d-flex flex-wrap gap-4">

    @foreach ($bestFilms as $bestFilm)

    <div class="card" style="width: 18rem;">

        <div class="card-body">
          <h3 class="card-title">{{ $bestFilm->title }}</h3>
          <h6 class="card-title">{{ $bestFilm->original_title }}</h6>
          <p>{{ $bestFilm->nationality }}</p>
          <p>{{ $bestFilm->vote }}</p>
          <p>{{ $bestFilm->date }}</p>

          <a href="#" class="btn btn-primary">Descrizione film</a>
        </div>
      </div>

    @endforeach
</div>


@endsection
