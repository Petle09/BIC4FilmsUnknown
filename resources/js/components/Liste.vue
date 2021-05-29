<template>
    <div id="app">
        <ul>
            <li v-for="filmtitel in filmTitles" v-bind:key="filmTitles">
                {{filmTitles.name}}
            </li>
        </ul>
        <h1>
            DAS IST UNSERE HEADLINE
        </h1>
    </div>
</template>

<script>
export default {
    name: "Liste",
    data(){
        return{
            filmTitles: [
                {id: 1, name: "A"},
                {id: 2, name: "B"}
            ]
        }
    },
}
</script>

<style scoped>

</style>
