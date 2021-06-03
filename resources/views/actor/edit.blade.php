@extends('layouts.app')


@section('content')
    <section class="section">
        <div class="container">
            <h1>Edit actor</h1>
            <edit-actor title="Schauspieler bearbeiten" :actor-data='{!! json_encode($actor) !!}' ></edit-actor>
        </div>
    </section>
@endsection
