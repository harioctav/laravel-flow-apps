<template>
    <h1>This From Vue JS</h1>
    <div v-for="question in questions" :key="question.id">
        {{ question.title }}
    </div>
</template>

<script setup>
defineProps({
    questions: {
        type: Array,
        required: true,
    },
});
</script>
