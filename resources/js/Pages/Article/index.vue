<template>
    <div class="container mx-auto pt-5">
        <nav>
            <Link :href="`/articles/create`">Create</Link>
        </nav>
        <div class="post__block" v-for="article in articles" :key="article.id">
            <h2>{{ article.title }}</h2>
            <p>{{ article.author }}</p>
            <Link :href="`/articles/${article.id}`">Show</Link>
            <Link :href="`/articles/${article.id}/edit`">Edit</Link>
            <Link :href="`/articles/${article.id}`" method="DELETE">Read more</Link>
        </div>
    </div>
</template>

<script setup>
import {defineProps} from 'vue'
import {Link} from '@inertiajs/vue3'
defineProps({
    articles: Object
})
</script>

<style scoped>

</style>
