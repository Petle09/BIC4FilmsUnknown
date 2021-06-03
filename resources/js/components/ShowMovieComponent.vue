<template>
    <div class="card has-background-grey-light" >
        <header class="card-header">
            <h1 class="card-header-title">
                Übersicht Film:
            </h1>
        </header>
        <div class="field">
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
            <a href="#" class="card-footer-item">Löschen</a>
            <a :href="'/film/'+movieData.slug+'/edit'" class="card-footer-item">Bearbeiten</a>
            <a :href="'/actor'" class="card-footer-item">Abbrechen</a>
        </footer>
    </div>
</template>

<script>
export default {
    name: "ShowMovieComponent",
    props:['movieData'],
}
</script>

<style scoped>

</style>
