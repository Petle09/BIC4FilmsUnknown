<template>
    <div>
        <input id="input" v-model="message" placeholder="Schauspieler?">
       <Table id="Suche Schauspieler" class="table">
            <thead class="table" >
            <tr>
                <TableElement element-type="th">ID</TableElement>
                <TableElement element-type="th">Name</TableElement>
                <TableElement element-type="th">Beschreibung:</TableElement>
                <TableElement element-type="th">Zuletzt geändert:</TableElement>
                <TableElement element-type="th"></TableElement>
            </tr>
            </thead>
            <tbody>
            <tr  v-for="data in actors" v-if="data.name.toLowerCase().includes(message.toLowerCase())">

                <TableElement  element-type="td">
                    <a :href="'/actor/' + data.slug"
                       :title="'Bearbeiten'" v-text="data.id"/>
<!--                  <a :href="'/data/' + data.slug"
                       :title="data.id" v-text="data.id"/> -->
                </TableElement>
                <TableElement element-type="td">{{ data.name }}</TableElement>
                <TableElement element-type="td">{{ data.description }}</TableElement>
                <TableElement element-type="td">{{ data.updated_at }}</TableElement>
                <TableElement element-type="td" style="width: 200px"></TableElement>
            </tr>
            </tbody>
        </Table>

    </div>


</template>

<script>
import TableElement from "./base/TableComponent";
import FindActorComponent from "./FindActorComponent";

export default {
    name: "SearchActorComponent",
    components: {
        FindActorComponent,
        TableElement,
    },
    props: ['title'],
    mounted() {
        this.getList();
    },
    data() {
        return {
            actors: [],
            message: '',
            loading: true,
            noDomains: false,
        }
    },
    methods: {
        getList() {
            axios.get('/list/actor')
                .then(response => {
                    this.actors = response.data;
                    console.log(response);
                    this.loading = false;
                    if (this.loading)
                        this.noDomains = true;
                });
        },

    }
}
</script>

<style scoped>

</style>
