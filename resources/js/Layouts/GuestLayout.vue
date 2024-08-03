<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="text-text min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-primary">
        <div>
            <Link href="/">
                <ApplicationLogo class="w-20 h-20 fill-current text-white" />
            </Link>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-dark/70 border border-black/70  shadow-lg overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>
