<script setup lang="ts">
import PrimaryButton from './PrimaryButton.vue';

const props = defineProps({
    service: {
        type: Object,
        required: true,
    },
    canRegister: {
        type: Boolean,
    },
});

</script>

<template
>
<!-- substirui o / pela tela do serviço -->
<a :href="$page.props.auth.user ? '' : route('register')"  class="flex flex-col min-h-40 max-h-40 shadow-md rounded-md border border-gray-300 hover:transform hover:-translate-y-1 hover:transition-transform hover:duration-300 transition-transform duration-300 ">

    <button class="">
        <div class="basis-2/3 bg-slate-800 p-4 rounded-t-md">
            <p class="text-white text-xl font-semibold">{{ service.title }}</p>
            <p class="text-gray-300 text-sm font-semibold mt-2 truncate">{{ service.whatsapp_number }}</p>

        </div>
        <div class="basis-1/3 p-4 rounded-b-md flex  text-xl font-extrabold  justify-center  items-center">
            <primary-button>R$ {{ service.price }},00</primary-button>

            </div>


        </button>

    </a>




</template>
