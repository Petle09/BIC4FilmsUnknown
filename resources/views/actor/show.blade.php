@extends('layouts.app')


@section('content')
    <section class="section">
        <div class="container">
            <show-actor title="Schauspieler" :actor-data='{!! json_encode($actor, JSON_HEX_APOS) !!}'></show-actor>
        </div>
    </section>
@endsection
