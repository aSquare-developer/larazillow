<template>
    <div>Index</div>
    <Link href="/show">Show page</Link>
    <div>
        Here is message: {{ message }}
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    message: String
})
</script>