<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ServiceCard from '@/Components/ServiceCard.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    services: {
        type: Object,
        required: true,
    },
    canRegister: {
        type: Boolean,
    },
});
</script>

<template>
    <Head title="Painel do Usuário" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Painel do usuário</h2>
        </template>

        <div class="py-12">
            <div class="max-w-full mx-auto sm:px-6 lg:px-36">

                <div class="grid mt-4 grid-cols-1 md:grid-cols-2  lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-6">
                    <div v-for="service in services.data" :key="service.id">
                       <ServiceCard   :service="service" :canRegister="canRegister" />
                   </div>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
