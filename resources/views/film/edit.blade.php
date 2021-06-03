@extends('layouts.app')


@section('content')
    <section class="section">
        <div class="container">
            <h1>Edit film</h1>
            <edit-movie title="Film bearbeiten" :movie-data='{!! json_encode($film) !!}' ></edit-movie>
        </div>
    </section>
@endsection
