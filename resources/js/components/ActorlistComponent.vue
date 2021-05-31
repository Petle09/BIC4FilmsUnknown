<template>
    <div class="table-container is-2-tablet">

        <!--                        <label class="label" for="invention">Inventions</label>-->

        <Table id="Actors" class="table is-5-desktop is-hoverable has-background-primary has-text-white">
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
            <tr v-for="data in actors" :keydata.="id">

                <TableElement element-type="td">
                    <a :href="'/data/' + data.slug"
                       :title="data.id" v-text="data.id"/></TableElement>
                <TableElement element-type="td">{{ data.name }}</TableElement>
                <TableElement element-type="td">{{ data.description }}</TableElement>
                <TableElement element-type="td">{{ data.updated_at }}</TableElement>
                <TableElement element-type="td" style="width: 500px"></TableElement>
            </tr>
            </tbody>
        </Table>
    </div>

</template>

<script>

import TableElement from "./base/TableComponent";
export default {
    name: "ActorlistComponent",
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
