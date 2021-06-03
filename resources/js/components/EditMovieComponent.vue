<template xmlns="http://www.w3.org/1999/html">
    <div class="card">
        <header class="card-header">
            <h1 class="card-header-title">
                Film anlegen
            </h1>
        </header>
        <div class="box px-4 py-4">
            <div class="field">
                <label class="label">Name</label>
                <div class="field">
                    <input class="input" type="Name" v-model="movieData.name">
                </div>
            </div>
            <div class="field">
                <label class="label">Beschreibung</label>
                <div class="field">
                    <textarea class="textarea input" type="Beschreibung" v-model="movieData.description"
                              rows="4"></textarea>
                </div>
            </div>
        </div>
        <footer class="card-footer">
            <a :href="'/film'" v-on:click="update" class="button card-footer-item">Bearbeiten</a>
            <a :href="'/film'" class="button card-footer-item">Abbrechen</a>
        </footer>
    </div>
</template>

<script>


export default {
    name: "EditMovieComponent",
    props: ['movieData'],

    data() {
        return {
            movie: { name: this.movieData.name,
                description: this.movieData.description },
        }
    },
    methods: {
        update:function (event) {
            axios.put('/film/'+this.movieData.slug, this.movie)
        },
    }
}
</script>

<style scoped>
</style>
