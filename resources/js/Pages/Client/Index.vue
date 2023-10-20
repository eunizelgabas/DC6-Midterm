<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';
    import {Link} from '@inertiajs/vue3';
    import { inject } from 'vue';
    import ClientCard from  '@/Components/ClientCard.vue'

    const props = defineProps({
        clients: Array
})
    const toggleDarkMode = inject('isDarkMode');
</script>

<template>
    <Head title="Clients" />

    <AuthenticatedLayout>
        <template #header >
            <h2 class="font-semibold text-xl leading-tight" >Client Lists</h2>
        </template>

        <div class="py-2">
            <div class="flex justify-between">
                <h1 class="text-3xl font-medium text-gray-700 "></h1>
                <Link href="clients/create" class="btn-primary inline-flex items-center mr-20 px-2 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    Create Client</Link>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-wrap" >

                <ClientCard v-for=" client in props.clients" :client="client" :key="client.id" />
            </div>
        </div>
    </AuthenticatedLayout>

</template>
