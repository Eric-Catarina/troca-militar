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



    <div class="bg-dark dark:bg-dark text-text dark:text-white/50">

        <div class="min-h-screen px-6 flex flex-col justify-between  selection:text-white">
            <header class="align-top py-10 flex flex-row justify-between px-5">
                <a class="font-bold text-8xl text-accent px-5 " href="/">
                    Troca Militar
                </a>
                <nav v-if="canLogin" class="-mx-3 flex px-5">
                    <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                        class="rounded-md text-3xl px-3 py-2 text-text ring-1 ring-transparent transition hover:text-text/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Dashboard
                    </Link>

                    <template v-else class="flex flex-wrap pl-5">
                        <div class="content-center justify-items-end">
                            <Link :href="route('login')"
                                class="rounded-md text-3xl px-3 py-2 text-text ring-1 ring-transparent transition hover:text-text/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Entrar
                            </Link>

                            <Link v-if="canRegister" :href="route('register')"
                                class="rounded-md text-3xl px-3 py-2 text-text ring-1 ring-transparent transition hover:text-text/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Cadastrar
                            </Link>

                        </div>
                    </template>
                </nav>

            </header>

            <main class="mt-6 flex justify-center">
                        <p class="mt-4 max-w-screen-2xl text-center text-3xl text-white dark:text-white/80">
                            Bem-vindo ao nosso site de troca de serviços militares, a plataforma ideal para
                            militares que desejam
                            comprar ou vender plantões e serviços na guarda. Facilite a gestão do seu tempo e
                            encontre oportunidades
                            para ajustar sua rotina conforme suas necessidades.

                        </p>
            </main>

            <footer class="self-end place-self-end py-16 text-center text-sm text-text dark:text-white/70">
                Versão v{{ laravelVersion }} (PHP v{{ phpVersion }})
            </footer>
        </div>
    </div>
</template>
