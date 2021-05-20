<template>
<button onclick="funktion"></button>
</template>

<script>
/* Beispiel Code*/
let form = new Form({
    'invention_id': '',
    'name': '',
    'description': '',
    'domain_id': '',
    'noReset': ['domain_id']
});
// das export default braucht man ... hier werden andere vue componenten, methoden und variablen für di benutztung im html registriert
export default {
    name: "InventionFormComponent", // name der Komponente wichtig für html TAGs
    components: {
        QueryMessage
    },
    props: {
        //hier kommen die Variablen rein (wie bei ExampleComponent.... da is z.b Title drinnen)
        isEditable: {
            required: false,
            type: Boolean,
            default: false
        },
        currentInvention: {
            required: false,
            type: Object
        }
    },
    data() {         // des is a beispiel für a objekt das wir uns erstellt haben wo wir die Daten von der Database reinladen
        return {
            edit: undefined,
            form: form,
            url: '',
            domains: [],
            noDomains: false
        }
    },
    methods: {          // hier kommen die Funktionen rein die im HTML code benutzt werden
        submit() {
            if (this.edit)
                this.form
                    .put(this.url);
            else
                this.form
                    .post(this.url)
                    .then(response => {
                        this.url = '/invention/' + response.slug;

                        this.form.invention_id = response.invention_id;
                        this.form.name = response.name;
                        this.form.description = response.description;

                        this.form.noReset = ['invention_id', 'name', 'description'];

                        this.edit = true;

                        window.history.pushState("", "", this.url);
                    });
        }
    },
    created() {                                                 // den axios.get Aufruf benutzen wir hier um Daten von der Database auszulesen.... die funktion ist in list/domain/ (heisst bei euch anders)
        axios.get('/list/domain')                           // Das ist ein AJAX Methoden Aufruf ....  die Url für die methode muss man mitgeben... und der Aufruf passiert mit "get"
            .then(response => {                                 // Die Homepage ist ja nicht am Server(wenn ein Client sich verbindet ladets der ja runter)
                this.domains = response.data;                   // Das heisst auch hier(lokal) wird mit "get" und "post" aufrufen gearbeitet wenn man eine Funktion vom Backend aufrufen will
                                                                // die verfügbaren Methoden stehen in routes/web.php
                if (this.loading)                               //"response" is eine Variable auf die wir dann zugreifen können mit "." z.b um die Daten vom aufruf auszulesen
                    this.noInventions = true;
            });
        this.edit = this.isEditable;
        if (this.edit) {
            this.url = '/invention/' + this.currentInvention.slug;

            this.form.invention_id = this.currentInvention.invention_id;
            this.form.name = this.currentInvention.name;
            this.form.description = this.currentInvention.description;
            this.form.domain_id = this.currentInvention.domain_id;
            this.form.noReset = ['invention_id', 'name', 'description', 'domain_id'];
        } else {
            this.url = '/invention';
        }
    },
    computed: {                                                         //keine Ahnung für was man das braucht
        loading() {
            return !this.domains.length
        }
    },
    watch: {
        domains() {
            if (!this.loading && this.form.domain_id === '') {
                this.form.domain_id = _.first(this.domains).id;
            }
        }
    }
}
</script>

<style scoped>

</style>
