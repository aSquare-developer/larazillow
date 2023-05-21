<template>
    <div>
        <ul>
            <li><Link href="/">Home Page</Link></li>
            <li><Link href="/show">Show Page</Link></li>
            <li><Link href="/listing">Listing</Link></li>
        </ul>
    </div>


    <slot></slot>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>
