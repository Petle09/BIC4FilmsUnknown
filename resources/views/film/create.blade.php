@extends('layouts.app')


@section('content')
    <section class="section">
        <div class="container">
            <h1>Create film</h1>
            <example-component title="Das ist ein Test">
                <Liste title="FILME">
                    Probetest!
                </Liste>
            </example-component>

        </div>
    </section>
@endsection

<script>
    import Liste from "../../js/components/Liste";
    export default {
        components: {Liste}
    }
</script>
