@extends('layouts.app')


@section('content')
    <section class="section">
        <div class="container">
            <edit-movie title="Film bearbeiten" :movie-data='{!! json_encode($film, JSON_HEX_APOS) !!}' ></edit-movie>
        </div>
    </section>
@endsection
