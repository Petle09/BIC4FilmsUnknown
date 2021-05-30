<template>
    <div class="table-container is-fullwidth">

        <!--                        <label class="label" for="invention">Inventions</label>-->

        <table id="invention" class="table is-fullwidth is-hoverable has-background-primary has-text-white">
            <thead>
            <tr class="title is-6">
                <TableElement element-type="th">Domain</TableElement>
                <TableElement element-type="th">Description</TableElement>
                <TableElement element-type="th">Created</TableElement>
                <TableElement element-type="th">Modified</TableElement>
                <TableElement element-type="th"></TableElement>
            </tr>
            </thead>
            <tbody>
            <tr v-for="domain in domains" :key="domain.id">

                <TableElement element-type="td">
                    <a :href="'/domain/' + domain.slug"
                       :title="domain.name" v-text="domain.name"/>
                </TableElement>
                <TableElement element-type="td">{{ domain.name }}</TableElement>
                <TableElement element-type="td">{{ domain.description }}</TableElement>
                <TableElement element-type="td" style="width: 160px">

                </TableElement>
            </tr>
            </tbody>
        </table>
    </div>

</template>

<script>

import TableElement from "./base/TableComponent";
export default {
    name: "MovielistComponent",
    components: {
        TableElement,
        Table
    },
    props: ['title'],
    mounted() {
        this.getList();
    },
    data() {
        return {
            domains: [],
            loading: true,
            noDomains: false,
        }
    },
    methods: {
        getList() {
            axios.get('/list/actor')
                .then(response => {
                    this.domains = response.data;
                    console.log(response);
                    this.loading = false;
                    if (this.loading)
                        this.noDomains = true;
                });
        },

    }
}
</script>
