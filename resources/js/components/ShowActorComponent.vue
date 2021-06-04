<template>
    <div class="card" >
        <header class="card-header">
            <h1 class="card-header-title">
                Übersicht Schauspieler
            </h1>
        </header>
        <div class="table-container">
            <table id="Schauspieler Übersicht" class="table is is-fullwidth">
                <thead class="title">
                <tr class="title">
                    <table-element element-type="th">ID</table-element>
                    <table-element element-type="th">Name</table-element>
                    <table-element element-type="th">Beschreibung</table-element>
                    <table-element element-type="th">Film ID</table-element>
                    <table-element element-type="th">Hinzugefügt am</table-element>
                    <table-element element-type="th">Zuletzt geändert</table-element>
                </tr>
                </thead>
                <tbody class="table is-bordered is is-striped">
                <tr>
                    <table-element width="45" text-class="has-text-centered" element-type="td">{{actorData.id}}</table-element>
                    <table-element element-type="td">{{ actorData.name }}</table-element>
                    <table-element element-type="td">{{ actorData.description }}</table-element>
                    <table-element width="100" text-class="has-text-centered" element-type="td">{{ actorData.film_id }}</table-element>
                    <table-element width="130" text-class="has-text-centered" element-type="td" >{{ getTime(actorData.created_at)}}</table-element>
                    <table-element text-class="has-text-centered" element-type="td" >{{ getTime(actorData.updated_at)}}</table-element>
                </tr>
                </tbody>
            </table>
        </div>
        <footer class="card-footer" >
            <div class="button is-large is-fullwidth has-background-grey-light" style="padding:25px">
                <button class="button  is-danger" style="margin: 250px" @click="deleteActor">Löschen</button>
                <button class="button" style="margin: 250px" @click="editActor">Bearbeiten</button>
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

<script>
import TableElement from "./base/TableComponent";
import moment from "moment";
export default {
   name: "ShowActorComponent",
    components: {TableElement},
    props: ['actorData'],

   methods: {
       deleteActor:function (event) {
           console.log(this.actorData.slug)
           axios.delete('/actor/'+this.actorData.slug)
           window.location.href="/actor"

       },
       editActor:function(event){
           window.location.href="/actor/"+ this.actorData.slug + "/edit"
       },
       getback:function (event){
           window.location.href="/actor"
       },
       getTime(Date){
           return moment (Date).format('DD.MM.YYYY hh:mm:ss')
       }
   }

}
</script>

<style scoped>

</style>
