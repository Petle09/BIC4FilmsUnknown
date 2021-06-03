<template>
    <div class="container">
        <div class="columns is-multiline">
            <div class="card blog-card column is-half is-offset-one-quarter">
                <header class="card-header">
                    <h1 class="card-header-title is-centered" v-text="edit ? form.name : 'New film'"/>
                </header>
                <div class="card-content">
                    <div class="content">
                        <query-message :success="form.isSuccess()" :fail="form.isFail()"
                                       :message="form.failMessage || form.successMessage"></query-message>
                        <form @submit.prevent="submit">
                            <div class="field" v-if="!edit">
                                <label class="label" for="title">Title</label>
                                <div class="control">
                                    <input id="title"
                                           v-model="form.name"
                                           class="input"
                                           v-bind:class="{ 'is-danger': form.errors.has('name')}"
                                           type="text" autofocus>
                                </div>
                                <p class="help is-danger" v-if="form.errors.has('name')"
                                   v-text="form.errors.get('title')"/>
                            </div>



                            <div class="field">
                                <label class="label" for="body">Description</label>
                                <div class="control">
                                    <textarea id="body" v-model="form.description" class="textarea"></textarea>
                                </div>
                                <p class="help is-danger" v-if="form.errors.has('description')"
                                   v-text="form.errors.get('description')"/>
                                <p class="help">
                                    You can use <a target="_blank"
                                                   href="https://daringfireball.net/projects/markdown/syntax">
                                    Markdown</a> syntax here.
                                </p>
                            </div>

                            <button type="submit" class="button is-large is-primary is-outlined is-fullwidth"
                                    v-text="edit ? 'Save' : 'Post'" :disabled="loading"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
let form = new Form({
    'name': '',
    'description': '',
    'id' : '',
    'noReset': ['name', 'description'],
});

export default {
    name: "FormComponent",
    components: {
        QueryMessage,
    },
    props: {
        isEditable: {
            required: false,
            type: Boolean,
            default: false
        },
        movieData: {
            required: false,
            type: Object
        }
    },
    data() {
        return {
            edit: undefined,
            form: form,
            url: '',
            allFilms: [],
            noFilms: false
        }
    },
    methods: {
        submit() {
            if (this.edit)
                this.form
                    .put(this.url);
            else
                this.form
                    .post(this.url)
                    .then(response => {

                        this.url = '/film/' + response.slug;
                        this.form.name = response.name;
                        this.form.description = response.description;
                        this.form.noReset = ['name', 'description'];
                        this.form.successMessage = response.message;
                        this.edit = true;
                        window.history.pushState("", "", this.url);
                    });
        }
    },
    created() {
        axios.get('/list/film')
            .then(response => {
                this.allFilms = response.data;

                if (this.loading)
                    this.noFilms = true;
            });

        this.edit = this.isEditable;
        if (this.edit) {
            this.url = '/film/' + this.movieData.slug;
            this.form.name = this.movieData.name;
            this.form.description = this.movieData.description;
            this.form.id = this.movieData.id;
            this.form.noReset = ['id', 'name', 'description'];
        } else {
            this.url = '/film';
        }
    },

    computed: {
        loading() {
            return !this.allFilms.length

        }
    },

    watch: {
        categories() {
            if (!this.loading && this.form.id === '') {
                this.form.id = _.first(this.allFilms).id;
            }
        }
    }
}

</script>

<style scoped>

</style>
