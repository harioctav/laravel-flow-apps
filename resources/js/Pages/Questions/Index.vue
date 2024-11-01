<template>
    <h1>This From Vue JS</h1>
    <div v-for="question in questions" :key="question.id">
        <Link :href="route('questions.show', question.id)">
            {{ question.title }}
        </Link>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    questions: {
        type: Array,
        required: true,
    },
});
</script>
