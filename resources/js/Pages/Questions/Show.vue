<script setup>
defineProps({
    question: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <p>Id: {{ question.id }}</p>
    <p>Title: {{ question.title }}</p>
</template>
