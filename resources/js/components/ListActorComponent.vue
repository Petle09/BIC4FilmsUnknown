<template>
    <div class="table-container">
        <Table id="Schauspielerliste" class="table is-fullwidth">
            <thead class="title">
            <tr class="title">
                <TableElement element-type="th">ID</TableElement>
                <TableElement element-type="th">Name</TableElement>
                <TableElement element-type="th">Beschreibung</TableElement>
                <TableElement element-type="th">Film ID</TableElement>
                <TableElement element-type="th">Zuletzt geändert</TableElement>
            </tr>
            </thead>
            <tbody class="table is-bordered is is-striped">
            <tr v-for="data in actors" :keydata.="data.id">
                <TableElement width="45" text-class="has-text-centered" element-type="td">
              <a :href="'/actor/'+data.slug"
                   :title="'Bearbeiten'" v-text="data.id"/>
                </TableElement>
                <TableElement element-type="td">{{ data.name }}</TableElement>
                <TableElement element-type="td">{{ data.description }}</TableElement>
                <TableElement width="100" text-class="has-text-centered" element-type="td">{{ data.film_id }}</TableElement>
                <TableElement element-type="td" >{{ getTime(data.updated_at)}}</TableElement>
            </tr>
            </tbody>
        </Table>
    </div>

</template>

<script>

import TableElement from "./base/TableComponent";
import moment from "moment";
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
        getTime(Date){
            return moment (Date).format('DD.MM.YYYY hh:mm:ss')
        }

    }
}
</script>

<style scoped>
</style>
