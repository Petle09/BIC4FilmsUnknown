<template>
    <div class="card has-background-grey-light" >
        <header class="card-header">
            <h1 class="card-header-title">
                Übersicht Schauspieler:
            </h1>
        </header>
        <div class="field">
            <label class="label">ID:</label>
            <div class="control">
                <input class="input"  type="ID" placeholder="ID" readonly :value="actorData.id">
            </div>
        </div>
        <div class="field">
            <label class="label">Name:</label>
            <div class="control">
                <input class="input"  type="ID" placeholder="Name" readonly :value="actorData.name">
            </div>
        </div>
        <div class="field">
            <label class="label">Beschreibung des Schauspielers:</label>
            <div class="control">
                <input class="input"  type="ID" placeholder="Beschreibung des Schauspielers" readonly :value="actorData.description">
            </div>
        </div>
        <div class="field">
            <label class="label">Film ID:</label>
            <div class="control">
                <input class="input"  type="ID" placeholder="Film ID" readonly :value="actorData.film_id">
            </div>
        </div>
        <div class="field">
            <label class="label">Schauspieler hinzugefügt am:</label>
            <div class="control">
                <input class="input"  type="ID" placeholder="Schauspieler hinzugefügt am" readonly :value="actorData.created_at">
            </div>
        </div>
        <div class="field">
            <label class="label">Schauspieler zuletzt geändert am:</label>
            <div class="control">
                <input class="input"  type="ID" placeholder="Schauspieler zuletzt geändert am" readonly :value="actorData.updated_at">
            </div>
        </div>
        <footer class="card-footer">
           <button class="button is-danger" @click="entfernen">Delete</button>
            <!--<a :href="'/actor'" v-on:click="entfernen" class="button card-footer-item">Löschen</a>-->
           <a :href="'/actor/' +actorData.slug+ '/edit'" class="card-footer-item">Bearbeiten</a>
           <a :href="'/actor'" class="card-footer-item">Abbrechen</a>
       </footer>
   </div>
</template>

<script>
export default {
   name: "ShowActorComponent",
   props: ['actorData'],

   methods: {
       entfernen:function (event) {
           console.log(this.actorData.slug)
           axios.delete('/actor/'+this.actorData.slug)
           window.location.href="/actor"

       }
   }

}
</script>

<style scoped>

</style>
