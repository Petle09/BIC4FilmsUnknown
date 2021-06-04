<template xmlns="http://www.w3.org/1999/html">
    <div class="card">
        <header class="card-header">
            <h1 class="card-header-title">
                Film anlegen:
            </h1>
        </header>

        <!-- <form>
            <div class="box px-4 py-4">
                <label class="name">Name</label>
                    <div class="field">
                       <input class="input" v-model="">
                    </div>
                <input type="text" class="form-control" name="name" id="name" />
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" />
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="message" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Send message</button>
        </form> -->





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
            form:new Form( { name: this.movieData.name, description: this.movieData.description})
        }
    },
    methods: {
        update:function (event) {
            console.log(this.form)
            this.form.put('/film/'+this.movieData.slug);
        },
    }
}
</script>

<style scoped>
</style>
