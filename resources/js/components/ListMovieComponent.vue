<template>
    <div class="table-container">
        <Table id="Filmliste" class="table">
            <thead class="title">
            <tr class="title">
                <TableElement element-type="th">ID</TableElement>
                <TableElement element-type="th">Name</TableElement>
                <TableElement element-type="th">Beschreibung:</TableElement>
                <TableElement element-type="th">Zuletzt geändert:</TableElement>
                <TableElement element-type="th"></TableElement>
            </tr>
            </thead>
            <tbody>
            <tr v-for="data in films" :key="data.id">

                <TableElement element-type="td">
                    <a :href="'/data/' + data.slug"
                       :title="'Bearbeiten'" v-text="data.id"/></TableElement>
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
    name: "MovielistComponent",
    components: {
        TableElement,

    },
    props: ['title'],
    mounted() {
        this.getList();
    },
    data() {
        return {
            films: [],
            loading: true,
            noDomains: false,
        }
    },
    methods: {
        getList() {
            axios.get('/list/film')
                .then(response => {
                    this.films = response.data;
                    console.log(response);
                    this.loading = false;
                    if (this.loading)
                        this.noDomains = true;
                });
        },

    }
}
</script>
