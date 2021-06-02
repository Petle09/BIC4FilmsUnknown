<template>
    <div>

        <Table id="Actors" class="table is-4-desktop">
            <thead>
            <tr class="title is-7">
                <TableElement element-type="th">ID</TableElement>
                <TableElement element-type="th">Name</TableElement>
                <TableElement element-type="th">Vita</TableElement>
                <TableElement element-type="th">Updated</TableElement>
                <TableElement element-type="th"></TableElement>
            </tr>
            </thead>
            <tbody>
            <tr  v-for="data in actors" v-if="data.name === message">

                <TableElement element-type="td">
                    <a :href="'/data/' + data.slug"
                       :title="data.id" v-text="data.id"/></TableElement>
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

export default {
    name: "FindActorComponent",
    components: {
        TableElement,
    },
    props: ['title'],
    mounted() {
        this.getList();
    },
    data() {
        return {
            actors: [],
            mess: [],
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
