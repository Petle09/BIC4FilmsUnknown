<template xmlns="http://www.w3.org/1999/html">
    <div class="card">
        <header class="card-header">
            <h1 class="card-header-title">
                Schauspieler anlegen:
            </h1>
        </header>
        <div class="box px-4 py-4">
            <div class="field">
                <label class="label">Name</label>
                <div class="field">
                    <input class="input" type="Name" v-model="actor.name" placeholder="Max Mustermann">
                </div>
            </div>
            <div class="field">
                <label class="label">Beschreibung</label>
                <div class="field">
                    <textarea class="textarea input" type="Beschreibung" v-model="actor.description"
                              placeholder="Was macht den Schauspieler aus?" rows="4"></textarea>
                </div>
            </div>
            <div class="field">
                <label class="label">Film ID</label>
                <div class="field">
                    <input class="input" type="Film ID" v-model="actor.film_id" placeholder="Film ID" >
                </div>
            </div>
        </div>
        <footer class="card-footer">
            <a :href="'/actor'" v-on:click="anlegen" class="button card-footer-item">Anlegen</a>
            <a :href="'/home'" class="button card-footer-item">Abbrechen</a>
        </footer>
    </div>
</template>

<script>
import TableElement from "./base/TableComponent";
export default {
    components: {TableElement},

    data() {
        return {
            actor: { name: null, description: null, film_id: null },
        }
    },

    methods: {
        anlegen:function (event) {
            axios.post('/actor', this.actor)
        },
    }
}
</script>

<style>

</style>
