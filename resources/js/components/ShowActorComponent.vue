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
            <label class="label">Schauspieler erstellt am:</label>
            <div class="control">
                <input class="input"  type="ID" placeholder="Schauspieler erstellt am" readonly :value="actorData.created_at">
            </div>
        </div>
        <div class="field">
            <label class="label">Schauspieler zuletzt geändert am:</label>
            <div class="control">
                <input class="input"  type="ID" placeholder="Schauspieler zuletzt geändert am" readonly :value="actorData.updated_at">
            </div>
        </div>
        <footer class="card-footer">
            <a href="#" class="card-footer-item has-text-black has-background-danger">Löschen</a>
            <a href="#" class="card-footer-item has-text-black has-background-warning">Bearbeiten</a>
            <a :href="'/actor'" class="card-footer-item has-text-black has-background-success">Abbrechen</a>
        </footer>


<!--
        <div class="table-container">
                       <Table id="Actor" class="table is-bordered is-5-desktop is-hoverable has-background-white has-text-black">
                            <thead>
                            <tr class="title is-5">
                                <TableElement element-type="th">ID:</TableElement>
                                <TableElement element-type="th">Name:</TableElement>
                                <TableElement element-type="th">Beschreibung:</TableElement>
                                <TableElement element-type="th">Film ID:</TableElement>
                                <TableElement element-type="th">Erstellt am:</TableElement>
                                <TableElement element-type="th">Zuletzt geändert:</TableEnt>

                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="data in actors" :keydata.="id">
                                <TableElement element-type="td">
                                    <a :href="'/actor/'+data.slug"
                                       :title="'Edit'" v-text="data.id"/>
                                </TableElement>
                                <TableElement element-type="td">{{ data.name }}</TableElement>
                                <TableElement element-type="td">{{ data.description }}</TableElement>
                                <TableElement element-type="td">{{ data.updated_at }}</TableElement>
                                <TableElement element-type="td" style="width: 200px"></TableElement>
                            </tr>
                </tbody>
            </Table>
        </div> -->
    </div>
</template>

<script>
export default {
    name: "ShowActorComponent",
    props: ['actorData'],
}
</script>

<style scoped>

</style>
