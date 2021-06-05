<template>
    <div class="container ">
        <div class="columns is-multiline">
            <div class="card column is-half is-offset-one-quarter has-background-grey-light">
                <header class="card-header">
                    <h1 class="card-header-title" v-text="title">

                    </h1>
                </header>
                <div class="card-content">
                    <div class="content">
                        <slot></slot>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        title: {
            required :true,
            type: String
            }
        }
    }
</script>

<style>

</style>

