@extends('layouts.app')

@section('content')
    <section class="section is-fullheight">
        <mainMenue title="Filme über das Unbekannte">                               <!--  <example-component></example-component> ist eine vue componente  -->
            @if (session('status'))
                <query-message :success="true" :fail="false" message="{{ session('status') }}"></query-message>
            @endif
            <p>Willkommen Benutzer: <strong>{{ auth()->user()->name }}</strong>.<br>Wählen sie eine Funktion aus! </p>

            <img src = "img/Videothek.jpg"  />

        </mainMenue>
    </section>
@endsection
