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
                    <input class="input" type="Name" v-model="actor.name">
                </div>
            </div>
            <div class="field">
                <label class="label">Beschreibung</label>
                <div class="field">
                    <textarea class="textarea input" type="Beschreibung" v-model="actor.description"
                              rows="4"></textarea>
                </div>
            </div>
            <div class="field">
                <label class="label">Film ID</label>
                <div class="field">
                    <input class="input" type="Film ID" v-model="actor.film_id">
                </div>
            </div>
        </div>
        <footer class="card-footer">
            <a :href="'/actor'" v-on:click="update" class="button card-footer-item">Bearbeiten</a>
            <a :href="'/actor'" class="button card-footer-item">Abbrechen</a>
        </footer>
    </div>
</template>

<script>


export default {
    name: "EditActorComponent",
    props: ['actorData'],

    data() {
        return {
            actor: { name: this.actorData.name,
                description: this.actorData.description, film_id: this.actorData.film_id },
        }
    },
    methods: {
        update:function (event) {
            axios.put('/actor/'+this.actorData.slug, this.actor)
        },
    }
}
</script>

<style scoped>
</style>
