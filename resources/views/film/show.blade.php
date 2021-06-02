@extends('layouts.app')


@section('content')
    <section class="section">
        <div class="container">
            <h1>Show film</h1>
            <show-movie title="Film:" :movie-data='{!! json_encode($film) !!}'></show-movie>
        </div>
    </section>
@endsection
