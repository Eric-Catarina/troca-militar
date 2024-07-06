<script setup lang="ts">
import PrimaryButton from './PrimaryButton.vue';

</script>

<template
>
<button class="flex flex-col min-h-40 max-h-40 shadow-md rounded-md border border-gray-300 hover:transform hover:-translate-y-1 hover:transition-transform hover:duration-300 transition-transform duration-300 ">
    <div class="basis-2/3 bg-slate-800 p-4 rounded-t-md">
        <p class="text-white text-xl font-semibold">Serviço de Hospedagem</p>
        <p class="text-gray-300 text-sm font-semibold mt-2 truncate">Irei tirar o seu serviço o dia que você quiser onde você quiser...Irei tirar o seu serviço o dia que você quiser onde você quiser...</p>

    </div>
    <div class="basis-1/3 p-4 rounded-b-md flex  text-xl font-extrabold  justify-center  items-center">
        <primary-button>R$ 150,00</primary-button>

        </div>


    </button>




</template>
