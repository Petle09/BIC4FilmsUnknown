<template>
    <div class="card">
        <header class="card-header">
            <h1 class="card-header-title">
                Film Anlegen:
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
                        <input class="input" type="Name" placeholder="Filmtitel">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Beschreibung</label>
                    <div class="control">
                        <input class="input" type="Beschreibung" placeholder="Was macht den Film aus?">
                    </div>
                </div>
            </div>
        </div>
        <footer class="card-footer">
            <a :href="'/film'" class="card-footer-item">Anlegen</a>
            <a :href="'/home'" class="card-footer-item">Abbrechen</a>
        </footer>
    </div>
</template>

<script>
export default {
    name: "CreateMovieComponent"
}
</script>

<style scoped>

</style>
