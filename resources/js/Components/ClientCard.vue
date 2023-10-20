<script setup>
    // import { Link } from '@inertiajs/vue3';
    import { router } from '@inertiajs/vue3';
    import { inject } from 'vue';

    const props = defineProps({
        client: Object
    })
    const themeMode = inject('themeMode');

    function open(client) {
    router.visit('/clients/show/' + client.id)
}
</script>
<template>
    <div class="relative flex w-96 flex-col mt-3 mb-4 ml-4 rounded-xl bg-clip-border shadow-md" :class="themeMode" >
        <div class="p-6 py-15" @click="open(client)">
            <div class="mb-2 flex items-center justify-between">
                <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                Name: {{ client.first_name }} {{ client.last_name }}
                </p>
                <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                Credit Limit:  {{ client.credit_limit }}
                </p>
            </div>
            <p class="block font-sans text-sm font-normal leading-normalantialiased opacity-75">
                <span class=" font-bold"> Address: </span> {{ client.address }}
            </p>
            <p class="block font-sans text-sm font-normal leading-normal  antialiased opacity-75">
                <span class=" font-bold"> Phone: </span>  {{ client.phone }}
            </p>
        </div>
        <div class="p-6 pt-0">
            <button @click="open(client)" class="block w-full select-none rounded-lg bg-blue-600 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white transition-all hover:scale-105 focus:scale-105 focus:opacity-[0.85] active:scale-100 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                View Details
            </button>
        </div>
    </div>
</template>
