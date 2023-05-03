<template>
    <MainLayout>
        <div>Index</div>
        <Link href="/show">Show page</Link>
        <div>
            Here is message: {{ message }}
        </div>
    </MainLayout>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import MainLayout from '../../Layouts/MainLayout.vue';

defineProps({
    message: String
})
</script>