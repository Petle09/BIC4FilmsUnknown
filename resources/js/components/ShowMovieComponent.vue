<template>
    <div class="card" >
        <header class="card-header">
            <h1 class="card-header-title">
                Übersicht Film:
            </h1>
        </header>
        <div class="table-container">
            <table id="Film Übersicht" class="table is-fullwidth">
                <thead class="title">
                <tr class="title">
                    <table-element element-type="th">ID</table-element>
                    <table-element element-type="th">Name</table-element>
                    <table-element element-type="th">Beschreibung</table-element>
                    <table-element element-type="th">Hinzugefügt am</table-element>
                    <table-element element-type="th">Zuletzt geändert</table-element>
                </tr>
                </thead>
                <tbody class="table is-bordered is-striped ">
                <tr >
                    <table-element width="45" text-class="has-text-centered" element-type="td">{{movieData.id}}</table-element>
                    <table-element element-type="td">{{ movieData.name }}</table-element>
                    <table-element element-type="td">{{ movieData.description }}</table-element>
                    <table-element width="130" text-class="has-text-centered" element-type="td" >{{ getTime(movieData.created_at)}}</table-element>
                    <table-element text-class="has-text-centered" element-type="td" >{{ getTime(movieData.updated_at)}}</table-element>
                </tr>
                </tbody>
            </table>
        </div>
        <footer class="card-footer" >
            <div class="button is-large is-fullwidth has-background-grey-light" style="padding:25px">
                <button class="button  is-danger" style="margin: 250px" @click="deleteMovie">Löschen</button>
                <button class="button" style="margin: 250px" @click="editMovie">Bearbeiten</button>
                <button class="button" style="margin: 250px" @click="getback">Abbrechen</button>
            </div>

            <!-- tested with Google Chrome, Microsoft Edge and Mozilla Firefox
                   worked well without issue with Edge and Chrome but no function with Firefox -->
            <!--<a :href="'/actor'" v-on:click="entfernen" class="button card-footer-item">Löschen</a>-->
            <!-- <a :href="'/actor/' +actorData.slug+ '/edit'" class="card-footer-item">Bearbeiten</a> -->
            <!-- <a :href="'/actor'" class="card-footer-item">Abbrechen</a> -->
        </footer>
    </div>
</template>

<!--    previous design code, not removed to show that we tried many ways to improve our website -->
<!--        <div class="field">
            <label class="label">ID:</label>
            <div class="field">
                <input class="input"  type="ID" placeholder="ID" readonly :value="movieData.id">
            </div>
        </div>
        <div class="field">
            <label class="label">Name:</label>
            <div class="field">
                <input class="input"  type="ID" placeholder="Name" readonly :value="movieData.name">
            </div>
        </div>
        <div class="field">
            <label class="label">Beschreibung des Films:</label>
            <div class="field">
                <input class="input"  type="ID" placeholder="Beschreibung des Films" readonly :value="movieData.description">
            </div>
        </div>
        <div class="field">
            <label class="label">Film hinzugefügt am:</label>
            <div class="field">
                <input class="input"  type="ID" placeholder="Film hinzugefügt am" readonly :value="movieData.created_at">
            </div>
        </div>
        <div class="field">
            <label class="label">Film zuletzt geändert am:</label>
            <div class="field">
                <input class="input"  type="ID" placeholder="Film zuletzt geändert am" readonly :value="movieData.updated_at">
            </div>
        </div>
        <footer class="card-footer">
            <button class="button is-danger" @click="entfernen">Delete</button>
            <a :href="'/film/'+movieData.slug+'/edit'" class="card-footer-item">Bearbeiten</a>
            <a :href="'/film'" class="card-footer-item">Abbrechen</a>
        </footer>
    </div>
</template> -->

<script>
import moment from "moment";
import TableElement from "./base/TableComponent";

export default {
    name: "ShowMovieComponent",
    components: {TableElement},
    props:['movieData'],

    methods: {
        deleteMovie:function (event) {
            console.log(this.movieData.slug)
            axios.delete('/film/'+this.movieData.slug)
            window.location.href="/film"
        },
        editMovie:function(event){
            window.location.href="/film/"+ this.movieData.slug + "/edit"
        },
        getback:function (event){
            window.location.href="/film"
        },
        getTime(Date){
            return moment (Date).format('DD.MM.YYYY hh:mm:ss')
        }
    }
}
</script>

<style scoped>

</style>
