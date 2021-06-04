@extends('layouts.app')


@section('content')
    <section class="section">
        <div class="container">
            <show-movie title="Film" :movie-data='{!! json_encode($film, JSON_HEX_APOS) !!}'></show-movie>
        </div>
    </section>
@endsection
