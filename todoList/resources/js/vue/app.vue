<template>
    <div class="todoListContainer">
        <div class="heading">
            <h2 id="title">Too List</h2>
            <add-item-form />
        </div>
        <list-view></list-view>
    </div>
</template>

<script>
import addItemForm from './addItemForm.vue'
import listView from './listView.vue'

    export default {
        components: {
            addItemForm,
            listView,
                
        }
    }
</script>

<style scoped>
.todoListContainer {
    width: 300px;
    margin: auto;
}

.heading {
    background: #e6e6e6;
    padding: 10px;
}

#title {
    text-align: center;
}

</style>