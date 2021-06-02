<template xmlns="http://www.w3.org/1999/html">
    <div class="card">
        <header class="card-header">
            <h1 class="card-header-title">
                Film anlegen:
            </h1>
        </header>
        <div class="box px-4 py-4">
            <div class="field">
                <label class="label">Name</label>
                <div class="field">
                    <input class="input" type="Name" v-model="film.name" placeholder="Filmtitel">
                </div>
            </div>
            <div class="field">
                <label class="label">Beschreibung</label>
                <div class="field">
                    <textarea class="textarea input" type="Beschreibung" v-model="film.description"
                              placeholder="Was macht den Film aus?" rows="4"></textarea>
                </div>
            </div>
        </div>
        <footer class="card-footer">
            <a :href="'/film'" v-on:click="anlegen" class="button card-footer-item">Anlegen</a>
            <a :href="'/home'" class="button card-footer-item">Abbrechen</a>
        </footer>
    </div>
</template>

<script>
export default {
    name: "CreateMovieComponent",


    data() {
        return {
            film: { name: null, description: null},
        }
    },

    methods: {
        anlegen:function (event) {
            axios.post('/film', this.film)

        },
    }
}
</script>

<style scoped>

</style>
