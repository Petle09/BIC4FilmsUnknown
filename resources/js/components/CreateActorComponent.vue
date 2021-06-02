<template xmlns="http://www.w3.org/1999/html">
    <div class="card">
        <header class="card-header">
            <h1 class="card-header-title">
                Schauspieler anlegen:
            </h1>
        </header>
        <div class="box px-4 py-4">
            <div class="field">
                <label class="label">Name</label>
                <div class="field">
                    <input class="input" type="Name" placeholder="Max Mustermann">
                </div>
            </div>
            <div class="field">
                <label class="label">Beschreibung</label>
                <div class="field">
                    <textarea class="textarea" type="Beschreibung" placeholder="Was macht den Schauspieler aus?" rows="4"></textarea>
                </div>
            </div>
            <div class="field">
                <label class="label">Film ID</label>
                <div class="field">
                    <input class="input" type="Film ID" placeholder="Film ID">
                </div>
            </div>
        </div>
        <footer class="card-footer">
            <a :href="'/actor'" class="card-footer-item">Anlegen</a>
            <a :href="'/home'" class="card-footer-item">Abbrechen</a>
        </footer>
    </div>
</template>

<script>
import TableElement from "./base/TableComponent";
export default {
    components: {TableElement},


}
</script>

<style>

</style>
