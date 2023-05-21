<template>
    <div>
        <ul>
            <li><Link href="/">Home Page</Link></li>
            <li><Link href="/show">Show Page</Link></li>
            <li><Link href="/listing">Listing</Link></li>
        </ul>
    </div>

    <div>The page with time {{ timer }}</div>

    <slot></slot>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const timer = ref(0)
setInterval(() => timer.value++, 1000)
</script>
