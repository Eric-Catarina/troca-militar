<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <Head title="Troca Militar" />
    <div class="bg-dark dark:bg-dark text-text dark:text-white/50">

        <div
            class="min-h-screen flex flex-col items-center selection:text-white"
        >
            <div class="min-h-screen w-full max-w-2xl px-6 lg:max-w-7xl flex-col flex justify-between">
                <header class="align-top grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2">
                        <p class="font-bold text-6xl text-accent">
                            Troca Militar

                        </p>
                    </div>
                    <nav v-if="canLogin" class="-mx-3 flex flex-1 justify-end">
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('dashboard')"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </Link>

                        <template v-else>
                            <Link
                                :href="route('login')"
                                class="rounded-md text-xl px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Entrar
                            </Link>

                            <Link
                                v-if="canRegister"
                                :href="route('register')"
                                class="rounded-md text-xl px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Cadastrar
                            </Link>
                        </template>
                    </nav>
                </header>

                <main class="mt-6">
                    <div>

                        <p class="mt-4 text-3xl text-white dark:text-white/80 text-center">
                            Bem-vindo ao nosso site de troca de serviços militares, a plataforma ideal para militares que desejam comprar ou vender plantões e serviços.
                        </p>

                        </div>
                </main>

                <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                   Versão v{{ laravelVersion }} (PHP v{{ phpVersion }})
                </footer>
            </div>
        </div>
    </div>
</template>
