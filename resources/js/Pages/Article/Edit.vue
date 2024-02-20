<script setup>
import {useForm} from "@inertiajs/vue3";

const form = useForm({
})
</script>

<template>
    <div class="post__create">
        <form @submit.prevent="form.put(`/articles/${}`)">

        </form>
    </div>
</template>

<style scoped>

</style>
