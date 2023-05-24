<template>
    <div>
        Here is message: {{ message }}
    </div>
</template>

<script setup>
defineProps({
    message: String
})
</script>
