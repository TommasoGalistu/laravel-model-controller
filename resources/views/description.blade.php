
@extends('layout.main')
@section('name')
Description
@endsection


@section('content')
<div class="container d-flex flex-wrap gap-4">

    <h2>{{ $film->title }}</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, ipsum? Quos maiores similique nemo consequuntur quae nam laborum dolores ducimus unde eaque at provident expedita rem libero, cupiditate repellendus necessitatibus!

    </p>
</div>


@endsection
