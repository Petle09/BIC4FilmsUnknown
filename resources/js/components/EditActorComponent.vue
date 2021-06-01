<template>
    <div>

        {{ actor }}
        {{currentSlug}}

    </div>
</template>

<script>
import TableElement from "./base/TableComponent";

export default {
    name: "EditActorComponent",
    components: {
        TableElement,
    },
    props: ['actor'],
    mounted() {
        this.getList();
    },
    data() {
        return {
            actors: [],
            loading: true,
            noDomains: false,
            currentLocation: window.location.pathname,
            buffer: '',
            currentSlug:'',
        }
    },
    methods: {
        getList() {
            this.buffer = this.currentLocation.split('/');
            this.currentSlug = this.buffer[this.buffer.length -2];
            axios.post('/search/actor/',{'q': this.currentSlug})
            //axios.get('/actor/'+this.currentSlug)
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
