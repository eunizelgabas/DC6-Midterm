<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';

    const props  = defineProps({
        clients : Object
    })
</script>

<template>
    <Head title="Create Client" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create Client</h2>
        </template>

        <div class="min-h flex justify-center mt-12">

            <div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
                <div>
                    <h1 class="text-3xl font-bold text-center mb-2 cursor-pointer">Create a Client</h1>

                </div>
                <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
                <hr>
                <div class="space-y-4 mt-6">
                    <input type="text" placeholder="Firstname" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    <input type="text" placeholder="Lastname" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    <input type="text" placeholder="Address" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    <input type="number" placeholder="Phone No" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    <input type="number" placeholder="Credit Limit" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                </div>
                    <div class="text-center mt-6">
                        <button class="py-3 w-64 text-xl text-white bg-blue-400 rounded-2xl">Create Client</button>
                        <button class="ml-3 py-3 w-64 text-xl text-white bg-red-400 rounded-2xl">Cancel</button>

                    </div>
            </div>

        </div>
    </AuthenticatedLayout>

</template>
