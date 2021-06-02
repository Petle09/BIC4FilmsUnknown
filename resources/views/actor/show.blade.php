@extends('layouts.app')


@section('content')
    <section class="section">
        <div class="container">
            <h1>Show actor</h1>
            <show-actor title="Schauspieler:" :actor-data='{!! json_encode($actor) !!}'></show-actor>
        </div>
    </section>
@endsection
