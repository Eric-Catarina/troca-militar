<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

import { Head, useForm } from '@inertiajs/vue3';

import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';


const form = useForm({
    title: '',
    category: '',
    description: '',
    whatsapp_number: '',
    price: '',

});

const submit = () => {
    form.post(route('services.store'));
};

</script>
<template>
    <AuthenticatedLayout>

        <Head title="Troca Militar" />
        <div class="bg-dark dark:bg-dark text-text dark:text-white/50">

            <div class="min-h-screen flex flex-col items-center selection:text-white">
                <div class="min-h-screen w-full max-w-2xl px-6 lg:max-w-7xl flex-col flex justify-between">
                    <header class="align-top grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <p class="font-bold text-6xl text-accent">
                                Vender Serviço

                            </p>
                        </div>
                        <nav v-if="canLogin" class="-mx-3 flex flex-1 justify-end">
                            <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Dashboard
                            </Link>

                            <template v-else>
                                <Link :href="route('login')"
                                    class="rounded-md text-2xl px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Entrar
                                </Link>

                                <Link v-if="canRegister" :href="route('register')"
                                    class="rounded-md text-xl px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Cadastrar
                                </Link>
                            </template>
                        </nav>
                    </header>
                    <form @submit.prevent="submit">
                        <div>
                            <InputLabel for="title" value="Título" />
                            <TextInput id="title" type="text" class="mt-1 block w-full" v-model="form.title" required
                                autofocus />
                            <InputError class="mt-2" :message="form.errors.title" />
                        </div>
                        <div class="mt-4">
                            <InputLabel for="category" value="Categoria" />
                            <TextInput id="category" type="text" class="mt-1 block w-full" v-model="form.category"
                                required />
                            <InputError class="mt-2" :message="form.errors.category" />
                        </div>
                        <div class="mt-4">
                            <InputLabel for="description" value="Descrição" />
                            <TextInput id="description" type="text" class="mt-1 block w-full" v-model="form.description"
                                required />
                            <InputError class="mt-2" :message="form.errors.description" />
                        </div>
                        <div class="mt-4">
                            <InputLabel for="whatsapp_number" value="WhatsApp" />
                            <TextInput id="whatsapp_number" type="text" class="mt-1 block w-full"
                                v-model="form.whatsapp_number" required />
                            <InputError class="mt-2" :message="form.errors.whatsapp_number" />
                        </div>
                        <div class="mt-4">
                            <InputLabel for="price" value="Preço (150)" />
                            <TextInput id="price" type="text" class="mt-1 block w-full" v-model="form.price" required />
                            <InputError class="mt-2" :message="form.errors.price" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <PrimaryButton  class="ms-4 text-text" :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing"> Enviar
                            </PrimaryButton>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>


</template>
