<template>
    <div id="root">
        <h1>{{ result }}</h1>
        <form v-on:submit="onSubmitForm">
            <input ref="answer" maxlength="4" v-model="value" type="text">

        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                value: '',
            }
        },
        methods: {
            onSubmitForm(e) {
                e.preventDefault()
            }
        },
    }
</script>

<style>

</style>