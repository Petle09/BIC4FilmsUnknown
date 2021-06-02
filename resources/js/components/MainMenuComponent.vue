<template>
    <div class="container">
        <div class="columns is-multiline">
            <div class="card column is-half is-offset-one-quarter">
                <header class="card-header">
                    <h1 class="card-header-title" v-text="title">

                    </h1>
                </header>
                <div class="card-content">
                    <div class="content">
                        <slot></slot>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
//jede neue Komponente muss man in resources/app.js registrieren, so wie die ExampleComponent
//Dann kann man, wenn eine neue Komponente erstellt wurde unter /views/irgendeeinedatei.php seine Komponente eintragen, Bsp:in der home.blade.php ist die  <example-component></example-component> drinnen
// in den Ordnern "actor" "auth" "film" usw sind die pages drinnen die man auf der Hompage in dem Nav menü auswählen kann
// die app.blade.php ist eine Layout Datei, da drinnen is das gesamte Layout der seite, man braucht nur @extends('layouts.app') und @section('content') in einer neue seite, das layout wird dann um den content herumgebaut
export default {
//  props: ['title'],
//        mounted() {
//            console.log('Component mounted.')
//        }
//    name: "MainMenue",
    props: {
        title: {
            required :true,
            type: String
        }
}

    }
</script>


<style>

</style>

