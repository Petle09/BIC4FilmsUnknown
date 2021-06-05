<template xmlns="http://www.w3.org/1999/html">
    <div class="card">
        <header class="card-header">
            <h1 class="card-header-title">
                Film Bearbeiten
            </h1>
        </header>
            <query-message :success="form.isSuccess()" :fail="form.isFail()"
                           :message="form.failMessage || form.successMessage"></query-message>
            <div class="box px-4 py-4">
                <div class="field">
                    <label class="label">Name</label>
                    <article class="message is-danger" v-if="errors && errors.name">
                        <div class="message-body">
                            {{ errors.name[0] }}
                        </div>
                    </article>
                    <div class="field">
                        <input class="input" v-model="form.name">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Beschreibung</label>
                    <article class="message is-danger" v-if="errors && errors.description">
                        <div class="message-body">
                            {{ errors.description[0] }}
                        </div>
                    </article>
                    <div class="field">
                    <textarea class="textarea input" v-model="form.description"
                              rows="4"></textarea>
                    </div>
                </div>
            </div>
            <footer class="card-footer">
                <a  v-on:click="update" class="button card-footer-item">Bearbeiten</a>
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
            form:new Form( { name: this.movieData.name, description: this.movieData.description}),
            errors: null,
        }
    },
    methods: {
        update:function (event) {
            this.form.put('/film/'+this.movieData.slug).then(
                result => {
                    window.location.href="/film"
                }
            ).catch(error => {
                this.errors = error
            })
        },
    }
}
</script>

<style scoped>
</style>
