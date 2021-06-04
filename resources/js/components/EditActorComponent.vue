<template xmlns="http://www.w3.org/1999/html">
    <div class="card">
        <header class="card-header">
            <h1 class="card-header-title">
                Schauspieler anlegen:
            </h1>
        </header>


        <query-message :success="form.isSuccess()" :fail="form.isFail()"
                       :message="form.failMessage || form.successMessage"></query-message>


        <div class="box px-4 py-4">
            <div class="field">
                <label class="label">Name</label>
                <div class="field">
                    <input class="input" type="Name" v-model="form.name">
                </div>
            </div>
            <div class="field">
                <label class="label">Beschreibung</label>
                <div class="field">
                    <textarea class="textarea input" type="Beschreibung" v-model="form.description"
                              rows="4"></textarea>
                </div>
            </div>
            <div class="field">
                <label class="label">Film ID</label>
                <div class="field">
                    <input class="input" type="Film ID" v-model="form.film_id">
                </div>
            </div>
        </div>
        <footer class="card-footer">
            <a  v-on:click="update" class="button card-footer-item">Bearbeiten</a>
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
            form:new Form({ name: this.actorData.name,
                description: this.actorData.description, film_id: this.actorData.film_id }),
        }
    },
    methods: {
        update:function (event) {
            this.form.put('/actor/'+this.actorData.slug)
        },
    }
}
</script>

<style scoped>
</style>
