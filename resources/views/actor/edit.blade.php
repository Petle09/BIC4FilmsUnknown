@extends('layouts.app')


@section('content')
    <section class="section">
        <div class="container">
            <edit-actor title="Schauspieler bearbeiten" :actor-data='{!! json_encode($actor, JSON_HEX_APOS) !!}' ></edit-actor>
        </div>
    </section>
@endsection
