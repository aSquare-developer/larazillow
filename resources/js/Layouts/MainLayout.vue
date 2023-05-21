<template>
    <div>
        <ul>
            <li><Link href="/">Home Page</Link></li>
            <li><Link href="/show">Show Page</Link></li>
            <li><Link href="/listing">Listing</Link></li>
        </ul>
    </div>

    <div v-if="flashSuccess" class="success">
        {{ flashSuccess }}
    </div>

    <slot></slot>
</template>

<script setup>
import { computed } from "vue";
import { Link, usePage } from '@inertiajs/vue3';

// page.props.value.flash.success
const page = usePage()
const flashSuccess = computed(() => page.props.flash.success )
</script>

<style scoped>
.success {
    background-color: green;
    color: white;
}
</style>
