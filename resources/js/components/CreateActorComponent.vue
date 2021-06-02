<template>
    <div class="card">
        <header class="card-header">
            <h1 class="card-header-title">
                Schauspieler Anlegen:
            </h1>
        </header>
        <div class="card-content">
            <div class="content">
                <div class="field">
                    <label class="label">ID</label>
                    <div class="control">
                        <input class="input" type="ID" placeholder="ID">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input" type="Name" placeholder="Max Mustermann">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Beschreibung</label>
                    <div class="control">
                        <input class="input" type="Beschreibung" placeholder="Was macht den Schauspieler aus?">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Film ID</label>
                    <div class="control">
                        <input class="input" type="Film ID" placeholder="Film ID">
                    </div>
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
//    name: "CreateComponent",
    props: ['component_title']

}
</script>

<style>

</style>
