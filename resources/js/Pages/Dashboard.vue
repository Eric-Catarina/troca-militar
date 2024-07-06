<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ServiceCard from '@/Components/ServiceCard.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Painel do Usuário" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Painel do usuário</h2>
        </template>

        <div class="py-12">
            <div class="max-w-full mx-auto sm:px-6 lg:px-36">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">Você está logado!</div>
                </div>
                <div class="grid mt-4 grid-cols-1 md:grid-cols-2  lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-6">
                    <ServiceCard />
                    <ServiceCard />
                    <ServiceCard />
                    <ServiceCard />
                    <ServiceCard />
                    <ServiceCard />
                    <ServiceCard />
                    <ServiceCard />
                    <ServiceCard />
                    <ServiceCard />
                    <ServiceCard />
                    <ServiceCard />

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
