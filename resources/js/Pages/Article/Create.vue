<script setup>
import {useForm} from "@inertiajs/vue3";

const form = useForm({
    title: '',
    author: '',
    content: '',
})
</script>

<template>
    <div class="post__create">
        <form @submit.prevent="form.post('/articles')">

        </form>
    </div>
</template>

<style scoped>

</style>
